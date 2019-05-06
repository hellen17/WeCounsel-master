<?php 

class Chats{
    function fetch_user_last_activity($user_Id, $mysqli){
         $query = "
         SELECT * FROM login_details 
         WHERE user_Id = '$user_Id' 
         ORDER BY last_activity DESC 
         LIMIT 1
         ";
         $statement = $mysqli->prepare($query);
         $statement->execute();
         $result = $statement->get_result();
         foreach($result as $row)
         {
          return $row['last_activity'];
         }
    }


    function fetch_user_chat_history($from_user_id, $to_user_id, $mysqli){
        $query = "
        SELECT * FROM chat_message 
        WHERE (from_user_id = '".$from_user_id."' 
        AND to_user_id = '".$to_user_id."') 
        OR (from_user_id = '".$to_user_id."' 
        AND to_user_id = '".$from_user_id."')
        ORDER BY timestamp
        ";
        $statement = $mysqli->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $output = '<ul class="list-unstyled">';
        foreach($result as $row)
        {
         $user_name = '';
         if($row["from_user_id"] == $from_user_id)
         {
          $user_name = '<b class="text-success">You</b>';
         }
         else
         {
          $user_name = '<b class="text-danger">'.$this->get_user_name($row['from_user_id'], $mysqli).'</b>';
         }
         $output .= '
         <li style="border-bottom:1px dotted #ccc">
          <p>'.$user_name.' - '.$row["chat_message"].'
           <div align="right">
            - <small><em>'.$row['timestamp'].'</em></small>
           </div>
          </p>
         </li>
         ';
        }
        $output .= '</ul>';
        return $output;
    }

    function getCounselor($user_Id, $mysqli){
            $query = "SELECT user FROM counselors WHERE id = ?";
            $statement = $mysqli->prepare($query);
            $statement->bind_param('s',$user_Id);
            $statement->execute();
            $result = $statement->get_result();
            return $result;
    }
    
    function get_user_name($user_Id, $mysqli){
         $query = "SELECT user FROM users WHERE user_Id = ?";
        $statement = $mysqli->prepare($query);
        $statement->bind_param('s',$user_Id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_array();
        
        if(empty($row)){
            $result = $this->getCounselor($user_Id, $mysqli);  
            $row = $result->fetch_array();
        }else{
            echo 'row found';
        }
        
        
        return $row['user'];
    }

    function count_unseen_message($from_user_id, $to_user_id, $mysqli){
        $query = "
        SELECT * FROM chat_message 
        WHERE from_user_id = '$from_user_id' 
        AND to_user_id = '$to_user_id' 
        AND status = '1'
        ";
        $statement = $mysqli->prepare($query);
        $statement->execute();
        $count = $statement->num_rows();
        $output = '';
        if($count > 0){
         $output = '<span class="label label-success">'.$count.'</span>';
        }
        return $output;
    }
}