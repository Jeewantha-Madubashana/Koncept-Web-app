<?php   
           $connect = mysqli_connect("localhost", "root", "", "congcept");  
           /*$query = "SELECT emp.emp_id, emp.emp_name, emp.emp_photo,emp.emp_email,
						  branch.branch_name, bank.bank_name
					FROM employee as emp*/
			/*I faced prblem in retrive data from table i will fix as soon as possible and i will also commit*/
		   
		   $sql = "SELECT * FROM employee";  
           $result = mysqli_query($connect, $sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           /*echo '<pre>';  
           print_r(json_encode($json_array));  
           echo '</pre>';*/  
           echo json_encode($json_array);  
           ?>