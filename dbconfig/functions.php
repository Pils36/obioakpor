<?php
    require 'dbconfig/config.php';

    function getUserData($Id)
    {
        $sql = "select * from profile WHERE Id = '.$Id.'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        $array = array();
        
        if($resultCheck > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $array['Id'] = $row['Id'];
                $array['surname'] = $row['surname'];
                $array['firstname'] = $row['firstname'];
                $array['lastname'] = $row['lastname'];
                $array['callup'] = $row['callup'];
                $array['statecode'] = $row['statecode'];
                $array['phonenumber'] = $row['phonenumber'];
                $array['date_of_reg'] = $row['date_of_reg'];
                $array['course'] = $row['course'];
                $array['qualification'] = $row['qualification'];
                $array['gender'] = $row['gender'];
                $array['bank'] = $row['bank'];
                $array['acctnum'] = $row['acctnum'];
                $array['state'] = $row['state'];
                $array['institution'] = $row['institution'];
                $array['ppa'] = $row['ppa'];
                $array['imglink'] = $row['imglink'];
            }
            return $array;
        }

    }
function getId($statecode)
{
    $sql = "select Id from profile WHERE statecode = '.$statecode.'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            return $row['Id'];
        }

    }
}
?>