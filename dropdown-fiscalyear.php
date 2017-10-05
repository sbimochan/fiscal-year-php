<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Down Nepali fiscal year</title>
</head>
<body>
    <pre>
        Requirements: Compatible with PHP 5 or greater.
        Please take time to inspect value="". 
        Automatically selects current fiscal year. e.g 74-75 to 2017-2018 
        fiscal start day is Shrawan 1 and End is Ashad 30/31 so took care of it too.

    </pre>
    <div class="col-xs-4">
        <label>Fiscal Year</label>
            <div>
                <form action="" method="post">
                    <select name="fiscalyear" id="fiscalyear" class="form-control">
                        <?php $recentyear=date('Y');?>
                            <?php for($i=-5;$i<=8;$i++){
                                ?>
                                <?php
                                if(($recentyear).'-'.($recentyear+1)==($recentyear+($i-1)).'-'.($recentyear+($i))){
                                    $selected="selected";
                                }else{
                                    $selected=null;
                                }
                            ?>
                            <option value="<?php echo ($recentyear+($i-1)).'-'.($recentyear+($i));?>"       <?php 
                                    echo $selected;
                                    ?>
                                    >
                                <?php
                                 echo (($recentyear+($i-1))+57).'-'.($recentyear+($i)+57)
                                 ?>                               
                            </option>
                        <?php }
                        ?>
                    </select> 
                    <button type="submit" name="submit">Submit</button>
                </form>
                           
            </div>
        </div>
        <?php
        // $fiscalyear = $this->input->post('Fiscalyear');
        if(isset($_POST['fiscalyear'])){
            $fiscalyear=$_POST['fiscalyear'];           
        }
        $fiscalyearArray=explode("-",$fiscalyear);
        $fiscalStartDate=array(
            "2011"=>17,
            "2012"=>16,
            "2013"=>16,
            "2014"=>17,
            "2015"=>17,
            "2016"=>16,
            "2017"=>16,
            "2018"=>17,
            "2019"=>17,
            "2020"=>16,
            "2021"=>16,
            "2022"=>17,
            "2023"=>17,
            "2024"=>16,
            "2025"=>16,
            "2026"=>17,
            "2027"=>17,
            "2028"=>16,
            "2029"=>16,
            "2030"=>17,
            "2031"=>16,
            "2032"=>15,
            "2033"=>15      
        );
        $fiscalEnd=array(
            "2011"=>16,
            "2012"=>15,
            "2013"=>15,
            "2014"=>16,
            "2015"=>16,
            "2016"=>15,
            "2017"=>15,
            "2018"=>16,
            "2019"=>16,
            "2020"=>15,
            "2021"=>15,
            "2022"=>16,
            "2023"=>16,
            "2024"=>15,
            "2025"=>15,
            "2026"=>16,
            "2027"=>16,
            "2028"=>15,
            "2029"=>15,
            "2030"=>16,
            "2031"=>16,
            "2032"=>15,
            "2033"=>15
       
    );
        $startYear=$fiscalyearArray[0];
        $dynamicDayOfStart=$fiscalStartDate[$startYear];
        $newFiscalStartDate= $startYear.'-'.'7'.'-'.$dynamicDayOfStart; 
        $endYear=$fiscalyearArray[1];
        $dynamicDayOfEnd=$fiscalEnd[$endYear];
        $newFiscalEndDate= $endYear.'-'.'7'.'-'.$dynamicDayOfEnd; 
    ?>
    <div>
        <label for="">Corresponding start and end nepali fiscal year in AD</label><br>
        <i>Corresponding AD: <?php echo $fiscalyear?></i><br>
        <b><?php echo $newFiscalStartDate.' to '.$newFiscalEndDate; ?></b>
    </div>
</body>
</html>
