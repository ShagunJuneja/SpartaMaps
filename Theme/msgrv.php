<?php





    					$curl_conn = curl_init();

    					curl_setopt($curl_conn, CURLOPT_URL, 'http://events.sjsu.edu/EventList.aspx?fromdate=4/17/2016&todate=4/23/2016&display=Week&view=DateTime');
    					curl_setopt($curl_conn, CURLOPT_RETURNTRANSFER, 1);
    					$contents = curl_exec ($curl_conn);
    					echo $contents;



    					curl_close ($curl_conn);




?>