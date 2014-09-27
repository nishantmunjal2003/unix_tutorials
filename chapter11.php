<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script  type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
  
</script>

</head>

<body>

<div id="container">
  
    <?php include('left-link.php'); ?>
    <div class="middle-pannel">
      <div class="theory">
        <h1 align="center">Linking Files and Background/Foreground Processes</h1>
        <p ><br />
          <br />
          <div id=1101></div>
          <h2><strong>1. Linking files</strong></h2><br />
          The ln command (short for link)  lets we give multiple names to a single file. This is useful when we want to  get at a file quickly from within different directories. Assume that our  directory structure looks like this:<br />
  <p align="center"><img src="images/chapter11_clip_image001.png" alt="" width="264" height="212" /></p></p>
        <p>We may need  to refer frequently to a file called table1  in the tables  subdirectory when we  are  in  our home directory (jsmythe). Rather than typing the whole pathname<br />
        </p>
        <p><strong>project1/chapter3/tables/table1</strong><br />
        </p>
        <p>we could link the file to our  home directory. If we are in the home directory, the command to do this is:<br />
        </p>
        <p><strong>$ ln project1/chapter3/tables/table1  mytable1</strong><br />
        </p>
        <p>To create the link when we are in  the tables directory, the command would have been:<br />
        </p>
        <p><strong>$ ln table1 ~/mytable1</strong><br />
        </p>
        <p>After issuing either of these  commands, an ls command in our home directory would show an entry for mytable1.  The long format of the same command would show 2 links for the file mytable1:<br />
        </p>
        <p><strong>$ ls -l</strong><br />
          <strong>-rw-------   2 jsmythe   6 Jul  4 14:23 mytable1</strong><br />
        </p>
        <p>A long format listing of the file  table1 would also show 2 links.  What if  a file called mytable1 had already   existed in our home directory? Unix would let we know that a file by  that name exists, and would not make the link.<br />
          The effect of linking is that the  file now has two names. We may call up the file by either name. Creating a link  does not change the ownership, group, or permissions for a file. The inode  number of two files are same.<br />
        </p>
        <p><strong>1.1 Removing links</strong><br />
        </p>
        <p>Links are removed using the rm  command. To continue the example above, the command<br />
        </p>
        <p><strong>$ rm mytable1</strong><br />
        </p>
        <p>Removes one link to the file  table1 by removing the  file mytable1.  The file table1 itself, and its contents, still exists. Only when all the links  to the file have been removed will the file itself be erased.<br />
        </p>
        <p><strong>1.2 Symbolic links</strong><br />
          The links described in the  sections above are &quot;hard&quot; links. In  effect, making a hard link creates a   standard directory entry just like the one made when the file was created.  Hard links have certain limitations. Hard links cannot be made to a directory,  only to files, and hard links cannot be made across file systems and disk  partitions.<br />
          There  is   another  kind  of   link,  called  a   symbolic  link.  Symbolic links can  span file   systems, and  can  be   made  for directories.<br />
          In the figure above, assume that  we want to make a symbolic link from our home directory (jsmythe) to the  directory called chapter3. To create the symbolic link, we would move to our  home directory and give the command:<br />
        </p>
        <p><strong>$ ln -s project1/chapter3 linkdir</strong><br />
        </p>
        <p>The  -s   option  means  that   a  symbolic  link   is  created  (instead   of  the  default   hard  link).  This   command  creates  a symbolic link called linkdir which points  to the directory called chapter3. When we list the contents of  linkdir<br />
        </p>
        <p><strong>$ ls linkdir</strong><br />
          <strong>$ data      tables</strong><br />
        </p>
        <p>we see a listing of the contents  (data and tables)<br />
          We can learn more about the new  directory by using the long format and directory options with the ls command:<br />
        </p>
        <p><strong>$ ls -ld linkdir</strong><br />
          <strong>l---------                 1              staff       7  Jun 11                13:27     linkdir -&gt; project1/chapter3</strong><br />
        </p>
        <p>Symbolic links are shown with an  arrow (-&gt;) in the name column at the right.<br />
        </p>
        <p><strong>1.3 Removing symbolic links</strong><br />
          Use rm to remove a symbolic link,  for example<br />
        </p>
        <p><strong>$ rm linkdir</strong><br />
        </p>
        <p>This  removes the link only,  not   the file or  directory it was  pointing to.  If the  file   or directory is removed  but the  link remains, the link will no longer work.<br />
        <div id=1102></div>
        <h2><strong>2. Unix Processes</strong></h2>
          <p>A   process  is  an   instance  of  running   a  program.  If,   for  example,  three   people  are  running   the  same  program simultaneously, there are three  processes there, not just one. In fact, we might have more than one process  running even  with only person executing  the program,  because (we  will see later) the program can ``split into  two,'' making two processes out of one.<br />
          Keep in mind that all Unix  commands, e.g. cc and mail, are   programs, and thus contribute processes to the system when they are  running. If 10 users are running mail right now, that will be 10 processes. At  any given time, a typical Unix system will have many active processes, some of  which were set up when the machine was first powered up.<br />
          Every time we issue a command,  Unix starts a new process, and suspends the current process (the C-shell) until  the new process completes (except in the case of background processes, to be  discussed later).<br />
          Unix  identifies   every  process  by   a  Process  Identification  Number   (pid)  which  is   assigned  when  the   process  is initiated. When we  want to perform an operation on a process, we usually refer to it by its pid.<br />
          Unix is a timesharing system,  which means that the processes take turns running. Each turn is a called a  timeslice; on most systems this is set at  much less than one second. The reason this turns-taking approach is used is  fairness: We don't want a 2-second job to have to wait for a  5-hour job to finish, which is what would  happen if a job  had  the CPU to itself until it completed.1<br />
          </p>
          <p><strong>2.1  Determining Information about Current Processes</strong><br />
          The `ps -x' command will list all our currently-running  jobs. An example is:<br />
          </p>
          <p><strong>$  PID TT STAT  TIME COMMAND</strong><br />
          <strong>6799  co IW    0:01 -csh[rich] (csh)</strong><br />
          <strong>6823  co IW    0:00 /bin/sh /usr/bin/X11/startx</strong><br />
          <strong>6829  co IW    0:00 xinit  /usr/lib/X11/xinit/xinitrc --</strong><br />
          <strong>6830  co S     0:12 X :0</strong><br />
          <strong>6836  co I     0:01 twm</strong><br />
          <strong>6837  co I     0:01 xclock -geometry 50x50-1+1</strong><br />
          <strong>6841  p0 I     0:01 -sh[rich on xterm] (csh)</strong><br />
          <strong>6840  p1 I     0:01 -sh[rich on xterm] (csh)</strong><br />
          <strong>6847  p2 R     0:00 ps -x</strong><br />
          The meaning of the column titles is as follows:</p>
          </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              <p align="center">PID</p> </td>
            <td width="535" valign="top"><p>process identification number</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">TT</p></td>
            <td width="535" valign="top"><p>controlling terminal of the process</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">STAT</p></td>
            <td width="535" valign="top"><p>state of the job</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">TIME</p></td>
            <td width="535" valign="top"><p>amount of CPU time the process has acquired so far</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">COMMAND</p></td>
            <td width="535" valign="top"><p>name of the command that issued the process</p></td>
          </tr>
        </table>
        <p>The TT information gives terminal  names, which we can see by typing the who command. E.g. we see p2 in the TT  column above, which is the terminal listed as ttyp2 in the who command.<br />
          The state of the job is given by  a sequence of four letters, for example, `RWNA'. The first of these four is  typically one of the following:<br />
          first letter runnability of the  process R runnable process T stopped process S process sleeping for less than  about 20 seconds we processes that are idle (sleeping longer than about 20  seconds) A state-R process is runnable, i.e. it is be able to make use of a  turn given to it, and is waiting for one.   We can put a process in state T, i.e. stop the process, by typing  control-z. Suppose, for example, that we are using ftp to get some files from  some archive site, and we notice a file there called README. we can use the ftp  `get' command to get the README  file,  and then type   C-z.  This will stop  (suspend) the   ftp  process, and  get me   back to the  C-shell. At that  point we can read the README file, say using more, and then reactivate the ftp  process, by typing `fg' to the shell. <br />
          A typical example of an S/I  process is one that is waiting for user input. If we are using the emacs  editor, for example, the process will go to state S when it is waiting for me  to type something; if we take more than 20 seconds to decide what to type, the  process will be in state I.<br />
  </p>
        <p><strong>2.2  Foreground/Background Processes</strong><br />
        </p>
        <p>Suppose we want to execute a  command but do not want to wait for its completion, i.e. we want to be able to  issue other commands in the mean time. We can do this by specifying that the  command be executed in the background. <br />
          There are two ways to do this.  The first is to specify that it be a background process when we submit it,  which we can do  by  appending   an  ampersand  (`&amp;')   to  the  end  of  the   command.  For  example,   suppose  we  have   a  very  large program, which will take a long time to  compile. We could give the command<br />
        </p>
        <p><strong>$ cc bigprog.c &amp;</strong><br />
        </p>
        <p>Which will execute the  compilation while allowing me  to  submit other commands for  execution while the compile is running. The  C-shell will let me know what the  pid is  for this background process (so that we can later track it using ps,  or kill it), but  will also give me my regular prompt, inviting  me to  submit  new commands while the  other one is running.<br />
          But what about the compiler error  messages? We hope we don't have any :-) but if we do have some, we don't want them  to be interspersed with the output of other commands we are running while the  compile is executing. To avoid this, we redirect the error messages:<br />
        </p>
        <p><strong>$ cc bigprog.c &gt;&amp; errorlist &amp;</strong><br />
        </p>
        <p>All error messages will now be  sent to the file `errorlist', which we can view later.<br />
          Another good  example is   when  we start  a window   during  a  X   session. We  would like to  start   the  window from an existing  window, but we still want to be able to use the original window. W e execute  the command<br />
        </p>
        <p><strong>$ xterm &amp;</strong><br />
        </p>
        <p>This will start a new window, and  allow us to keep using the current window.<br />
          The  other   way  to  put  a  job in  the  background is   to  stop  it,   using  C-z  as   described  earlier,  and   then  use  another command, bg, to move the process to  the background.<br />
          For example, suppose we started  our long-running compile,<br />
        </p>
        <p><strong>$ cc bigprog.c</strong><br />
        </p>
        <p>but we forget to append the  ampersand. We can type control-z to suspend/stop the job, and then type `bg' to  resume the  job in the background,  allowing us to submit other commands while   the compilation takes place.  Unix  will tell us when the background job has completed, with a statement like<br />
        </p>
        <p><strong>[1]     Done                 cc bigprog.c</strong><br />
        </p>
        <p>By the way, if we log  out, whatever   background  processes  we   have  running  at   the  time will not be  killed; they   will continue to run.<br />
        </p>
        <p><strong>2.3 Terminating a Process</strong><br />
        </p>
        <p>We can terminate a process by  using the kill command. We simply find its pid (say by using ps), and then type<br />
        </p>
        <p><strong>$ kill -9 pid</strong><br />
        </p>
        <p>If the process is in the  foreground, though, the easiest way to kill it is to simply type control-C.<br />
        </p>
        <p><strong>Notes:</strong></p>
        <ul>
          <li>-The basic  mechanism for setting up the turns is as follows. The machine will have a piece  of hardware which sends electrical signals to the CPU at periodic intervals.  These signals force the CPU to stop the program it is running, and jump to  another program, which will be the operating system program (OS). The OS can  then determine whether the current program's timeslice is finished, and if so,  then give a turn to another program, by jumping to that program. Note the interaction  of hardware (the electrical signals, and the CPU's reaction to them) and  software (the OS) here. </li>
        
          <li>-Keep in mind, though, that there is ``no free  lunch'' here. The more processes on the machine, the longer it is between turns  for each process, so overall response time goes down.</li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li>-Though a much better solution to the problem is  to use emacs, since the error messages will automatically be placed into a  special buffer.</li>
        </ul>
        <p><strong>2.4 Processes and Jobs</strong><br />
        </p>
        <p>A   process  is  an   executing  program  identified   by  a  unique  PID   (process  identifier).  To  see  information   about  wer processes, with their  associated PID and status, type<br />
        </p>
        <p><strong>$ ps</strong><br />
        </p>
        <p>A process may  be in   the foreground, in the background, or be   suspended. In general the shell does   not  return  the UNIX prompt until  the current process has finished executing.  Some processes take a long time to run and hold up the  terminal.   Backgrounding a long process has the   effect that the UNIX  prompt is  returned  immediately, and  other tasks can be carried out while the original  process continues executing.<br />
        </p>
        <p><strong>2.4.1 Running background processes</strong><br />
        </p>
        <p>To background a process, type an  &amp; at the end of the command line. For example, the command sleep waits a  given number of seconds before continuing. Type<br />
        </p>
        <p><strong>$ sleep 10</strong><br />
        </p>
        <p>This will wait 10 seconds before returning the command  prompt %. Until the command prompt is returned, we can do nothing except wait. To run sleep in the background, type<br />
        </p>
        <p><strong>$  sleep 10 &amp;</strong><br />
          <strong>[1]  6259</strong><br />
        </p>
        <p>The &amp; runs the job in the  background and returns the prompt straight away, allowing we do run other  programs while waiting for that one to finish. The first line in the above  example   is typed  in by the user; the next  line, indicating job number and PID, is returned by the machine. The user is be  notified of a job number (numbered from 1) enclosed in square brackets,  together with a PID and is notified when a background process is finished.  Backgrounding is useful for jobs which will take a long time to complete.<br />
        </p>
        <p><strong>2.4.2 Backgrounding a  current foreground process</strong><br />
        </p>
        <p>At the prompt, type<br />
        </p>
        <p><strong>$ sleep 100</strong><br />
        </p>
        <p>We can suspend the process running in the foreground by  holding down the [control] key and typing [z] (written as ^Z) Then to put it in  the background, type<br />
        </p>
        <p><strong>$ bg</strong><br />
        </p>
        <p>Note: do not background programs that require user  interaction e.g. pine<br />
        </p>
        <p><strong>2.4.3 Listing  suspended and background processes</strong><br />
        </p>
        <p>When a  process is running, backgrounded or  suspended,  it  will   be  entered onto  a list   along with a  job number.  To examine this list, type<br />
        </p>
        <p><strong>$ jobs</strong><br />
          An example of a job list could be<br />
        </p>
        <p><strong>[1] Suspended sleep 100</strong><br />
          <strong>[2] Running netscape</strong><br />
          <strong>[3] Running nedit</strong><br />
        </p>
        <p>To restart (foreground) a  suspended processes, type<br />
        </p>
        <p><strong>$ fg %jobnumber</strong><br />
        </p>
        <p>For example, to restart sleep  100, type<br />
        </p>
        <p><strong>$ fg %1</strong><br />
        </p>
        <p>Typing fg with no job number  foregrounds the last suspended process.<br />
        <div id=1103></div>
        <h2><strong>3. Killing a process</strong></h2>
          <p>&nbsp;</p>
        <p>kill  (terminate   or  signal  a   process),  It  is sometimes   necessary  to  kill   a  process  (for   example,  when  an   executing program is in an infinite loop)   To kill a job running in the foreground,  type ^C (control c). For example, run<br />
        </p>
          <p><strong>$ sleep 100</strong><br />
            <strong>^C</strong><br />
          </p>
          <p>To kill a suspended or background  process, type<br />
          </p>
        <p><strong>$ kill %jobnumber</strong><br />
        </p>
          <p>For example, run<br />
          </p>
          <p><strong>$ sleep 100 &amp;</strong><br />
            <strong>$ jobs</strong><br />
          </p>
          <p>If it is job number 4, type<br />
          </p>
          <p><strong>$ kill %4</strong><br />
          </p>
          <p>To check whether this has worked, examine the job list again  to see if the process has been removed.<br />
          </p>
          <p><strong>3.1 ps  (process status)</strong><br />
          </p>
          <p>Alternatively, processes can be killed by finding their  process numbers (PIDs) and using kill PID_number<br />
          </p>
          <p><strong>$ sleep 100 &amp;</strong><br />
          <strong>$ ps</strong><br />
          <strong>PID TT S TIME COMMAND</strong><br />
          <strong>20077 pts/5 S 0:05 sleep 100</strong><br />
          <strong>21563 pts/5 T 0:00 netscape</strong><br />
          </p>
          <p>To kill off the process sleep 100, type<br />
          </p>
          <p><strong>$ kill 20077</strong><br />
          </p>
          <p>and then type ps again to see if it has been removed from  the list.<br />
          If a process refuses to be killed, uses the -9 option, i.e.  type<br />
          </p>
          <p><strong>$ kill -9 20077</strong><br />
          </p>
          <p>Note: It is not possible to kill off other users' processes  !!!
          </p>
          </p>
        <p><br />        
</div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
