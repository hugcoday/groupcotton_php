<?php 

       $clientip=$_SERVER['REMOTE_ADDR'];
 $clienthostname=$_SERVER['REMOTE_HOST'];
$clienthostname2=gethostbyaddr($clientip);

     $originalip=$_SERVER['HTTP_X_FORWARDED_FOR'];

 $clientbrowser=$_SERVER['HTTP_USER_AGENT'];
   $refererpage=$_SERVER['HTTP_REFERER'];
$serversoftware=$_SERVER['SERVER_SOFTWARE'];
      $php_date=$_SERVER['REQUEST_TIME'];

// seconds since 1970:
     $seconds=time();                   

$t=gettimeofday();              // returns array of seconds since 1970, plus microseconds 
//   $seconds=$t["sec"];
$microseconds=$t["usec"];       

   $human_date=date("r");

$microsecondid=uniqid();
          $pid=getmypid();


// execute a shell command
// show what user the current process $$ is running as
        $output=shell_exec("ps -p $$ -o user,ruser");      


print "<table border=1 CELLPADDING=5 cellspacing=0  bgcolor=#eeeeee>\n"; 
print "<tr> <td> Client IP address                                          </td> <td> $clientip          </td> </tr>\n";  
print "<tr> <td> Client hostname as environment variable (prob. not set up) </td> <td> $clienthostname    </td> </tr>\n";  
print "<tr> <td> Client hostname (done manually)                            </td> <td> $clienthostname2   </td> </tr>\n";  

print "<tr> <td> Original IP address                                        </td> <td> $originalip          </td> </tr>\n";  

print "</table><p>\n"; 


print "<table border=1 CELLPADDING=5 cellspacing=0  bgcolor=#eeeeee>\n"; 
print "<tr> <td> Client browser             </td> <td> $clientbrowser                          </td> </tr>\n";  
print "<tr> <td> Referring page             </td> <td> <a href=$refererpage>$refererpage</a>   </td> </tr>\n";  
print "<tr> <td> Result of shell command    </td> <td> <pre> $output </pre>                         </td> </tr>\n"; 
print "</table><p>\n"; 

print "<table border=1 CELLPADDING=5 cellspacing=0  bgcolor=#eeeeee>\n"; 
print "<tr> <td> Server software                                    </td> <td> $serversoftware    </td> </tr>\n"; 
print "<tr> <td> PHP datestamp (needs PHP 5.1.0)                    </td> <td> $php_date          </td> </tr>\n"; 
print "<tr> <td> Seconds since 1 Jan 1970                           </td> <td> $seconds           </td> </tr>\n"; 
print "<tr> <td> Time now - microsecond within the current second   </td> <td> $microseconds      </td> </tr>\n"; 
print "<tr> <td> Unique id based on time in microseconds            </td> <td> $microsecondid     </td> </tr>\n"; 
print "<tr> <td> Human-readable datestamp                           </td> <td> $human_date        </td> </tr>\n"; 
print "<tr> <td> Process ID                                         </td> <td> $pid               </td> </tr>\n"; 
print "</table><p>\n"; 

?>
