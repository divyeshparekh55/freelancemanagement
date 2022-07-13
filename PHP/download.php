<?php
    include_once('./config.php');
    include_once('../config/config.php');

            $idd = $_GET['id'];
            $imagedata = $db->select('image_submit',['*'],['user_id'=>$idd])->results();
            
            $html = '<table><tr><td>Id</td><td>User Id</td><td>Image Id</td><td>Work Date</td><td>Serial Number</td><td>Business Id</td><td>Analysis Year</td><td>Branch Location 1</td><td>Branch Location 2</td><td>Branch Location 3</td><td>Branch Location 4</td><td>File Number</td><td>Account Id</td><td>ID1</td><td>Result_ID1</td><td>Cash Equivalents</td><td>Invtory</td><td>Total Current Assets</td><td>Net Fixed Assets</td><td>Other Non Current  Assets</td><td>Trade Accounts receivable</td><td>Other Current Assets</td><td>Long Term Investments</td><td>Intangible Assets</td><td>Total Assets</td></tr>';
            
            foreach ($imagedata as $key => $row) {
                $stack = unserialize($row['stackholder']);
                $stackholderhtml = '';
                foreach ($stack as $key => $value) {
                    // $stackholderhtml .= '<td>'.$row['id'].'</td>'.
                    $stackholderhtml .= '<td>ID'.$index.'</td>'.'<td>'.$value[0].'</td>';
                }
                $html.='<tr><td>'.$row['id'].'</td><td>'.$row['user_id'].'</td><td></td><td>'.$row['work_date'].'</td><td>'.$row['serial_number'].'</td><td>'.$row['business_id'].'</td><td>'.$row['analysis_year'].'</td><td>'.$row['branch_location1'].'</td><td>'.$row['branch_location2'].'</td><td>'.$row['branch_location3'].'</td><td>'.$row['branch_location4'].'</td><td>'.$row['file_number'].'</td><td>'.$row['accountant_id'].'</td><td>'.$stackholderhtml.'</td><td>'.$row['cash_equivalents'].'</td><td>'.$row['invtory'].'</td><td>'.$row['total_current_assets'].'</td><td>'.$row['net_fixed_assets'].'</td><td>'.$row['other_non_current_assets'].'</td><td>'.$row['trade_accounts_receivable'].'</td><td>'.$row['other_current_assets'].'</td><td>'.$row['long_term_investments'].'</td><td>'.$row['intangible_assets'].'</td><td>'.$row['total_asstes'].'</td></tr>';                
            }

            $html.='</table>';
            // header('Content-Type:application/xls');
            // header('Content-Disposition:attachement;filename=report.xls');
            echo $html;
?>