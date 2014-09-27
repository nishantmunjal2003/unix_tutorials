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
         <h1 align="center">Additional Commands in UNIX</h1>
        <div id='301'></div>
        <p><h2><strong>1. uname</strong></h2>
        <p><br />
           By  default,  the   uname  utility  will   write  the  operating   system  characteristics  to   standard  output.  When   options  are specified,  symbols   representing  one  or   more  system  characteristics  shall   be  written  to   the  standard  output.   The format and contents of the symbols are implementation-defined.<br />
        </p>
        <p><strong>Syntax</strong><br />
          <strong>$ uname [-a] [-i] [-n] [-p] [-r] [-v]</strong>
          </p>
        </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
             <td width="73" valign="top"><br />
               -a </td>
             <td width="565" valign="top"><p>Print basic information currently available from the system.</p></td>
          </tr>
           <tr>
             <td width="73" valign="top"><p>-i</p></td>
             <td width="565" valign="top"><p>Print the name of the hardware implementation (platform).</p></td>
           </tr>
           <tr>
             <td width="73" valign="top"><p>-n</p></td>
             <td width="565" valign="top"><p>Print the nodename (the nodename is the name by which the system is    known to a communications network).</p></td>
           </tr>
           <tr>
             <td width="73" valign="top"><p>-r</p></td>
             <td width="565" valign="top"><p>Print the operating system release level.</p></td>
           </tr>
           <tr>
             <td width="73" valign="top"><p>-v</p></td>
             <td width="565" valign="top"><p>Print the operating system version.</p></td>
           </tr>
           <tr>
             <td width="73" valign="top"><p>-p</p></td>
             <td width="565" valign="top"><p>Print the current host's ISA or processor type.</p></td>
           </tr>
        </table>
         <p><strong>Example</strong><br />
           <strong> $ uname –n</strong><br />
           <strong>&lt;hostname&gt;</strong><br />
        <div id='302'></div>
        <h2><strong>2. mv</strong></h2>
           mv (short for move) is a Unix command that moves a file from  one place to another. The original file is deleted, and the new file may have  the same or a different name.<br />
  <strong>Syntax</strong><br />
  <strong>$ mv [-f] [-i]  oldname newname</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="103" valign="top"><br />
               -f </td>
             <td width="535" valign="top"><p>mv will move the file(s) without prompting even if it is writing over    an existing target. Note that this is the default if the standard input is    not a terminal.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-i</p></td>
             <td width="535" valign="top"><p>Prompts before overwriting another file.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>oldname</p></td>
             <td width="535" valign="top"><p>The oldname of the file renaming.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>newname</p></td>
             <td width="535" valign="top"><p>The newname of the file renaming.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>filename</p></td>
             <td width="535" valign="top"><p>The name of the file we want to move directory - The directory of    were we want the file to go.</p></td>
           </tr>
         </table>
         <p><strong>Examples</strong><br />
           <strong>$ mv myfile.txt newdirectory/</strong><br />
           moves the file myfile.txt to the directory newdirectory.<br />
  <strong>$ mv myfile.txt ../</strong><br />
           moves the file myfile.txt back one directory (if available).<br />
        <div id='303'></div>
        <h2><strong>3. date</strong></h2></p>
        The date command can be used to display or set the date. If  a user has superuser privileges, he or she can set the date by supplying a  numeric string with the following command:<br />
        Fortunately  there are  options to manipulate the format. The format option is preceded by a + followed  by any number of  field  descriptors   indicated  by  a % followed   by  a  character   to  indicate  which   field  is  desired.   The  allowed  field descriptors are:
         </p>
         <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="205" valign="top"><br />
               Option </td>
             <td width="433" valign="top"><p>Meaning</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%n</p></td>
             <td width="433" valign="top"><p>A newline</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%t</p></td>
             <td width="433" valign="top"><p>A tab</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%m</p></td>
             <td width="433" valign="top"><p>Month of year (01-12)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%d</p></td>
             <td width="433" valign="top"><p>Day of month (01-31)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%y</p></td>
             <td width="433" valign="top"><p>Last two digits of year (00-99)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%D</p></td>
             <td width="433" valign="top"><p>Date as mm/dd/yy</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%H</p></td>
             <td width="433" valign="top"><p>Hour (00-23)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%M</p></td>
             <td width="433" valign="top"><p>Minute (00-59)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%S</p></td>
             <td width="433" valign="top"><p>Second (00-59)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%T</p></td>
             <td width="433" valign="top"><p>Time as HH:MM:SS</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%j</p></td>
             <td width="433" valign="top"><p>Day of Year (001-366)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%w</p></td>
             <td width="433" valign="top"><p>Day of week (0-6) Sunday is 0</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%a</p></td>
             <td width="433" valign="top"><p>Abbreviated weekday (Sun-Sat)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%h</p></td>
             <td width="433" valign="top"><p>Abbreviated month (Jan-Dec)</p></td>
           </tr>
           <tr>
             <td width="205" valign="top"><p>%r</p></td>
             <td width="433" valign="top"><p>12-hour time w/ AM/PM</p></td>
           </tr>
        </table>
         <p><strong>Examples</strong><br />
           </p>
         <p><strong>$ date</strong><br />
           <strong>Mon Jan   6 16:07:23 PST 1997</strong><br />
         </p>
         <p><strong>$ date '+%a %h  %d %T %y'</strong><br />
           <strong>Mon Jan 06 16:07:23 97</strong><br />
         </p>
         <p><strong>	 $ date '+%a %h  %d %n %T %y'</strong><br />
           <strong>Mon Jan 06</strong><br />
           <strong>16:07:23 97</strong><br />
         </p>
         <p><strong>3.1. Set  Date and Time</strong><br />
           <strong>date [-s datestr]</strong></p>
         <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="91" valign="top"><br />
               <strong>-s datestr</strong></td>
             <td width="547" valign="top"><p>Sets the time and date to the value specified in the datestr. The    datestr may contain the month names, timezones, 'am', 'pm', etc. See examples    for an example of how the date and time can be set.</p></td>
           </tr>
        </table>
         <p><strong>Examples</strong><br />
           $ date -s &quot;11/20/2003  12:48:00&quot;<br />
           Set the date to the date and time shown.<br />
  	<div id='304'></div>	
  <h2><strong>4. Removing  Files and Directories</strong></h2><br />
  <strong>	4.1. rm</strong><br />
           Deletes a file without confirmation (by default).<br />
           The  options must  start  with &lsquo;-&lsquo;.  One or more filenames can be  specified, and  wildcards   are permitted (because the shell, not rm, expands them).<br />
           If  we  are   not familiar  with  wildcards   (*  and  ?   to  name  the most   dangerous),  read up  on   them.  Placing a  wildcard character in the file name list by  accident can make we a very unhappy camper<br />
  <strong>Syntax</strong><br />
  <strong>rm [-f] [-i] [-R] [-r] [filenames | directory]</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="91" valign="top"><br />
               -f </td>
             <td width="547" valign="top"><p>Remove all files (whether write-protected or not)    in a directory without prompting the user. In a write-protected directory,    however, files are never removed (whatever their permissions are), but no    messages are displayed. If the removal of a write-protected directory is    attempted, this option will notsuppress an error message.</p></td>
           </tr>
           <tr>
             <td width="91" valign="top"><p>-i</p></td>
             <td width="547" valign="top"><p>Interactive. With this option, rm prompts for confirmation before removing    any files. It over- rides the –f option and remains in effect even if the    standard input is not a terminal.</p></td>
           </tr>
           <tr>
             <td width="91" valign="top"><p>filenames</p></td>
             <td width="547" valign="top"><p>A path of a filename to be removed.</p></td>
           </tr>
         </table>
        <p><strong>Examples</strong><br />
           To remove the file myfile.txt without prompting the user.<br />
  </p>
        <p><strong>$ rm myfile.txt</strong><br />
           A number of files can all be removed at the same time, Here  we remove all the files with the lis extension.<br />
  </p>
        <p><strong>$ rm *.lis</strong><br />
          <strong>ultimateanswer.lis : ?y</strong><br />
          <strong>lessultimateanswer.lis : ?n</strong><br />
          <strong>moreultimateanswer.lis :  …</strong><br />
          Remove can also be used without  asking for   a confirmation. To do this uses the -force option.  Here we   remove all the files with the lis extension, without asking for a  confirmation.<br />
          <strong>$ rm -f *.lis</strong><br />
          Beware  when  using the   -f  option  we   can  easily  remove   all  files  from   a  directory  by   accident!  To  remove   all  files without asking for a  confirmation.<br />
          <strong>$ rm -f *</strong><br />
        </p>
        <p><strong>4.2. rmdir</strong><br />
           Used to remove the directories form the system<br />
  <strong>Syntax</strong><br />
  <strong>rmdir [-p]  [-s][-r]   directoryname</strong></p>
         <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="121" valign="top"><br />
               -p </td>
             <td width="517" valign="top"><p>Allow users to remove the directory dirname and its parent    directories which become empty. A message is printed to standard error if all    or part of the path could not be removed.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-s</p></td>
             <td width="517" valign="top"><p>Suppress the message printed on the standard error when -p is in    effect.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-r</p></td>
             <td width="517" valign="top"><p>Delete nonempty directory</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>directory</p></td>
             <td width="517" valign="top"><p>The name of the directory that we wish to delete.</p></td>
           </tr>
        </table>
        <p><strong>Examples</strong><br />
           removes the directory mydir<br />
          <strong>$ rmdir mydir</strong><br />
           To deletes all directories in the current directory whose  directory names begins with the characters &quot;index&quot;.<br />
          <strong>$ rmdir index*</strong><br />
           To remove a directory, even if files existed in that  directory.<br />
          <strong>$ rm -r directory</strong><br />
           To delete the directory named &quot;new-novel&quot;. This  directory, and all of it&rsquo;s contents, are erased from the disk, including any  sub-directories and files.<br />
          <strong>$ rm -r new-novel</strong><br />
        <div id='305'></div>
        <h2><strong>5.  ls</strong></h2>
  <p><br />
    The  ls   command  lists  the   files  in  your current   working  directory. When  we   log  onto  your   account  on  UNIX,   your current  working  directory  is  your   home or  personal directory.  This is   the  directory  in   which we have personal  disk space  to put files on  or to  create sub-directories under. The ls  command  also has options  available. Options follow the hyphen ( - )  sign. Two of the most useful options are a (return all files, even  &quot;hidden&quot;) and we (give long or full file information). The ls command  also accepts strings with the asterisk * used   as a &quot;wildcard&quot; to tell UNIX to search for all files that  contain the specified sub-string.<br />
    </p>
  <p><strong>Syntax</strong><br />
    <strong>ls [-a] [-A] [-b]  [-c] [-C] [-d] [-f] [-F] [-g] [-i] [-l] [-L] [-m] [-o] [-p] [-q] [-r] [-R] [-s]  [-t] [-u] [-x] [pathnames]</strong></p>
  <table border="1" cellspacing="0" cellpadding="0">
        <tr>
             <td width="103" valign="top"><br />
               -a </td>
             <td width="535" valign="top"><p>Shows us all files, even files that are hidden (these files begin    with a dot.)</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-A</p></td>
             <td width="535" valign="top"><p>List all files including the hidden files. However, does not display    the working directory (.) or the parent<br />
               directory (..).</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-b</p></td>
             <td width="535" valign="top"><p>Force printing of non-printable characters to be in octal \ ddd    notation.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-c</p></td>
             <td width="535" valign="top"><p>Use time of last modification of the i-node (file created, mode    changed, and so forth) for sorting (-t) or printing (-l or -n).</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-C</p></td>
             <td width="535" valign="top"><p>Multi-column output with entries sorted down the columns. Generally    this is the default option.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-d</p></td>
             <td width="535" valign="top"><p>If an argument is a directory it only lists its name not its    contents.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-f</p></td>
             <td width="535" valign="top"><p>Force each argument to be interpreted as a    directory and list the name found in each slot. This option turns off -l, -t,    -s, and -r, and turns on -a; the order is the order in which entries appear    in the directory. </p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-F</p></td>
             <td width="535" valign="top"><p>Mark directories with a trailing slash (/), doors with a trailing    greater-than sign (&gt;), executable files with a trailing asterisk (*),    FIFOs with a trailing vertical bar (|), symbolic links with a trailing    at-sign (@), and AF_UNIX address family sockets with a trailing equals sign    (=).</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-g</p></td>
             <td width="535" valign="top"><p>Same as -l except the owner is not printed.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-i</p></td>
             <td width="535" valign="top"><p>For each file, print the i-node number in the first column of the    report.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-l</p></td>
             <td width="535" valign="top"><p>Shows us huge amounts of information (permissions, owners, size, and    when last modified.)</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-L</p></td>
             <td width="535" valign="top"><p>If an argument is a symbolic link, list the file or directory the    link references rather than the link itself.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-m</p></td>
             <td width="535" valign="top"><p>Stream output format; files are listed across the page, separated by    commas.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-n</p></td>
             <td width="535" valign="top"><p>The same as -l, except that the owner's UID and group's GID numbers    are printed, rather than the associated character strings.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-o</p></td>
             <td width="535" valign="top"><p>The same as -l, except that the group is not printed.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-p</p></td>
             <td width="535" valign="top"><p>Displays a slash ( / ) in front of all directories.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-q</p></td>
             <td width="535" valign="top"><p>Force printing of non-printable characters in file names as the    character question mark (?).</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-r</p></td>
             <td width="535" valign="top"><p>Reverses the order of how the files are displayed.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-R</p></td>
             <td width="535" valign="top"><p>Includes the contents of subdirectories.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-s</p></td>
             <td width="535" valign="top"><p>Give size in blocks, including indirect blocks, for each entry.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-t</p></td>
             <td width="535" valign="top"><p>Shows us the files in modification time. </p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-u</p></td>
             <td width="535" valign="top"><p>Use time of last access instead of last modification for sorting    (with the -t option) or printing (with the –l option).</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-x</p></td>
             <td width="535" valign="top"><p>Displays files in columns.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-1</p></td>
             <td width="535" valign="top"><p>Print one entry per line of output.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>pathnames</p></td>
             <td width="535" valign="top"><p>File or directory to list.</p></td>
           </tr>
         </table>
         <p><strong>Examples</strong><br />
           <strong>$ ls -al *test*</strong><br />
           <strong>-rw-r--r--             1 hcsdar   usg           592    Sep  1  1993          .test</strong><br />
           <strong>drwx------            2 hcsdar    usg          512    Nov 11  16:21      dirtest</strong><br />
           <strong>-rw-r--r--             2 hcsdar   usg          1097    Nov  2   1993                       test</strong><br />
           <strong>-rw-------             1 hcsdar   usg          1097    Oct 19 15:54                        test.bin</strong><br />
           <strong>-rw-------     1 hcsdar   usg          1216   Jul 15  1993         test.fil</strong><br />
         </p>
        <p><strong>What Does Coloumn1 tells us?</strong>
           </p>
         </p>
        <p align="center"><img src="images/permissions.jpg" alt="" width="515" height="460" /></p>
         <p><strong>Column 1-</strong> tells us the type of file, what privileges it has and to  whom these privileges are granted. There are three types of privileges. Read  and write privileges are easy to understand. The exec privilege is a little  more difficult. We can make a file &quot;executable&quot; by giving it exec  privileges. This means that commands in the file will be executed when we type  the file name in at the UNIX prompt. It also means that when a directory which,  to UNIX is a file like any other file, can be &quot;scanned&quot; to see what  files and sub-directories are in it. Privileges are granted to three levels of  users:</p>
         <ol>
           <li>1) The owner of the file. The owner is usually, but  not always, the userid that created the file.</li>
           <li>2) The group to which the owner belongs. At GSU,  the group is usually, but not always designated as the first three letters of  the userid of the owner.</li>
           <li>3) Everybody else who has an account on the UNIX  machine where the file resides.</li>
        </ol>
         <p><strong>Column 2 -</strong>Number  of links<br />
           <strong>Column 3 - </strong>Owner  of the file. Normally the owner of the file is the user account that originally  created it.<br />
           <strong>Column 4  -</strong> Group   under which the  file  belongs.   This is  by  default the   group  to  which the account belongs or  first three letters of the userid. The group  can be changed by the chgrp command.<br />
           <strong>Column 5 - </strong>Size  of file (bytes).<br />
           <strong>Column 6 - </strong>Date  of last update<br />
           <strong>Column 7 - </strong>Name  of file<br />
        </p>
         <p><strong>Examples</strong><br />
           Rather than list the files  contained in the /usr directory, this command lists information  about the   /usr directory itself (without generating a listing of the contents of  /usr). This is very useful when we want to check the permissions of the<br />
        <p><strong>$ ls -ld /usr</strong><br />
           List the contents of your home  directory by adding a tilde after the ls command.<br />
  <strong>$ ls ~</strong><br />
           List the contents of your root  directory.<br />
  <strong>$ ls /ls ../</strong><br />
           List the contents of the parent directory.<br />
  <strong>$ ls */</strong><br />
           List the contents of all sub  directories.<br />
           Only list the directories in the  current directory.<br />
  <strong>$ ls -d */</strong><br />
        <div id='306'></div>
        <h2><strong>6. finger</strong></h2><br />
           In Unix, finger is a program we  can use to find information about computer users. It  usually lists the  login name, the full name, and possibly  other  details about the user  we  are  fingering.  These details may include the  office  location and phone number (if  known), login time, idle time, time mail was last read, and the user's plan and  project files. The information listed varies, and we may not be able to get any  information from some sites.<br />
  <strong>Syntax</strong><br />
  <strong>finger [-b] [-f] [-h] [-i] [-l] [-m] [-p] [-q] [-s] [-w] [username]</strong></p>
         <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="103" valign="top"><br />
               -b </td>
             <td width="535" valign="top"><p>Suppress printing the user's home directory and shell in a long    format printout.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-f</p></td>
             <td width="535" valign="top"><p>Suppress printing the header that is normally printed in a non-long    format printout.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-h</p></td>
             <td width="535" valign="top"><p>Suppress printing of the .project file in a long format printout.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-i</p></td>
             <td width="535" valign="top"><p>Force &quot;idle&quot; output format, which is similar to short    format except that only the login name, terminal, login time, and idle time    are printed.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-l</p></td>
             <td width="535" valign="top"><p>Force long output format.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-m</p></td>
             <td width="535" valign="top"><p>Match arguments only on user name (not first or last name).</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-p</p></td>
             <td width="535" valign="top"><p>Suppress printing of the .plan file in a long format printout.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-q</p></td>
             <td width="535" valign="top"><p>Force quick output format, which is similar to short format except    that only the login name, terminal, and login time are printed.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-s</p></td>
             <td width="535" valign="top"><p>Force short output format.</p></td>
           </tr>
           <tr>
             <td width="103" valign="top"><p>-w</p></td>
             <td width="535" valign="top"><p>Suppress printing the full name in a short format printout.</p></td>
           </tr>
         </table>
         <p><strong>Examples</strong><br />
           We can find out someone's username and whether they are  logged in with the finger command.<br />
  <strong>finger name_of_person[@remote_host]</strong><br />
  &quot;name&quot; can be a first or last name, or a username.<br />
  <strong>$ finger wil-1</strong><br />
  <strong>$ Login name: wil-1       In real  life: Faculty1</strong><br />
  <strong>how to change Finger</strong><br />
           Most Unix   systems  have  a chfn (change finger) command.  It  allows  us  to   change  the  standard   information  that  is displayed when someone fingers your  account.<br />
           To change your finger information,  on most systems,  at  the  Unix  shell prompt, enter chfn. We  will be   prompted to enter values for each of the following fields:<br />
           Changing finger information for username<br />
  <strong>$ chfin</strong><br />
  <strong>Name [your name]:</strong><br />
  <strong>Location [XY 0436]:</strong><br />
  <strong>Office Phone [555-1212]:</strong><br />
  <strong>Home Phone [555-7352]:</strong><br />
  </p>
  <div id='307'></div>
         <p><strong><h2>7. who</h2></strong>         
           The who command displays a list of users currently logged in  to the local system. It displays each users login name, the  login device (TTY port), the login date and  time.  The command reads  the binary file /var/admn/utmpx to  obtain this information and information about  where the users logged in from<br />
           If a user logged in remotely the who command displays the  remote host name or internet Protocol (IP) address in the last column of the  output.<br />
  <strong>Syntax</strong><br />
           $ who [-a] [-b] [-d] [-H] [-l] [-m]  [-nx] [-p] [-q] [-r] [-s] [-t] [-T] [-u] [am i] [ file ]</p>
         <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="121" valign="top"><br />
               -a </td>
             <td width="517" valign="top"><p>Process /var/adm/utmp or the named file with -b, -d, -l, -p, -r, -t,    -T, and -u options turned on.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-b</p></td>
             <td width="517" valign="top"><p>Indicate the time and date of the last reboot.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-d</p></td>
             <td width="517" valign="top"><p>Display all processes that have expired and not    been respawned by init . The exit field appears for dead processes and    contains the termination and exit values (as returned by wait), of the dead    process. This canbe useful in determining why a process terminated.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-H</p></td>
             <td width="517" valign="top"><p>Output column headings above the regular output.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-l</p></td>
             <td width="517" valign="top"><p>List only those lines on which the system is waiting for someone to    login. The name field is LOGIN in such cases. Other fields are the same as    for user entries except that the state field does not exist.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-m</p></td>
             <td width="517" valign="top"><p>Output only information about the current terminal.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-n x</p></td>
             <td width="517" valign="top"><p>Take a numeric argument, x, which specifies the number of users to    display per line. x must be at least 1. The -n option may only be used with    -q.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-p</p></td>
             <td width="517" valign="top"><p>List any other process which is currently active    and has been previously spawned by init . The name field is the name of the    program executed by init as found in /sbin/inittab. The state, line , and    idle fields have no meaning. The comment field shows the id field of the line    from /sbin/inittab that spawned this process. </p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-q</p></td>
             <td width="517" valign="top"><p>(quick who ) display only the names and the    number of users currently logged on. When this option is used, all other    options are ignored.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-r</p></td>
             <td width="517" valign="top"><p>Indicate the current run-level of the init    process. </p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-s</p></td>
             <td width="517" valign="top"><p>(default) List only the name, line, and time    fields.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-t</p></td>
             <td width="517" valign="top"><p>Indicate the last change to the system clock    (using the date utility) by root. See su and date.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-T</p></td>
             <td width="517" valign="top"><p>Same as the -s option, except that the state    field is also written. state is one of the characters listed under the    /usr/bin/who version of this option. If the -u option is used with -T, the    idle time is added to the end of the previous format.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>-u</p></td>
             <td width="517" valign="top"><p>List only those users who are currently logged    in. The name is the user's login name. The line is the name of the line as    found in the directory /dev. The time is the time that the user logged in.    The idle column contains the number of hours and minutes since activity last    occurred on that particular line. A dot (.) indicates that the terminal has    seen activity in the last minute and is therefore ``current''. If more than    twenty-four hours have elapsed or the line has not been used since boot time,    the entry is marked old. This field is useful when trying to determine    whether a person is working at the terminal or not. The pid is the process-ID    of the user's shell. The comment is the comment field associated with this    line as found in /sbin/inittab. This can contain information about where the    terminal is located, the telephone number of the dataset, type of terminal if    hard- wired, and so forth.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>am i</p></td>
             <td width="517" valign="top"><p>In the &quot;C&quot; locale, limit the output to describing the    invoking user, equivalent to the -m option. The am and i or I must be    separate arguments.</p></td>
           </tr>
           <tr>
             <td width="121" valign="top"><p>file</p></td>
             <td width="517" valign="top"><p>Specify a path name of a file to substitute for the database of    logged-on users that who uses by default.</p></td>
           </tr>
         </table>
         <p><strong>Examples</strong><br />
           <strong>$ who</strong><br />
           The general format for output is:<br />
  <strong>name [state] line time [idle] [pid] [comment] [exit]</strong><br />
  <strong>where:</strong><br />
           name user's login name.<br />
           state capability of writing to the terminal.<br />
           line name of the line found in /dev.<br />
           time time since user's login.<br />
           idle time elapsed since the user's last activity.<br />
           pid user's process id.<br />
           comment comment line in inittab(4).</p>
         <div id='308'></div>
        <p><h2><strong>8. cal</strong></h2>
           <p>Print a 12-month calendar (beginning with January) for the  given year, or a one-month calendar of the given month and year. month ranges  from 1 to 12. year ranges from 1 to 9999. With no arguments, print a calendar  for the current month.<br />
           Before we can do the calendar program we must have a file  named calendar at the root of your profile. Within that file we may have  something similar to:<br />
           </p>
           <p><strong>Syntax</strong><br />
           </p>
           <p><strong>$ cal [options] [[month] year]</strong>
             </p>
           </p>
         <table border="1" cellspacing="0" cellpadding="0">
           <tr>
             <td width="109" valign="top"><br />
               -j </td>
             <td width="529" valign="top"><p>Display Julian dates (days numbered 1 to 365,    starting from January 1).</p></td>
           </tr>
           <tr>
             <td width="109" valign="top"><p>-m</p></td>
             <td width="529" valign="top"><p>Display Monday as the first day of the week.</p></td>
           </tr>
           <tr>
             <td width="109" valign="top"><p>-y</p></td>
             <td width="529" valign="top"><p>Display entire year.</p></td>
           </tr>
           <tr>
             <td width="109" valign="top"><p>-V</p></td>
             <td width="529" valign="top"><p>Display the source of the calendar file.</p></td>
           </tr>
           <tr>
             <td width="109" valign="top"><p>month</p></td>
             <td width="529" valign="top"><p>Specifies the month for us want the calendar to    be displayed. Must be the numeric representation of the month. For example:    January is 1 and December is 12.</p></td>
           </tr>
           <tr>
             <td width="109" valign="top"><p>year</p></td>
             <td width="529" valign="top"><p>Specifies the year that we want to be displayed.</p></td>
           </tr>
         </table>
         <p><strong>EXAMPLES</strong><br />
           $ cal<br />
           $ cal -j<br />
           $ cal –m<br />
           $ cal –y<br />
           $ cal –y 1980<br />
           $ cal 12 2006<br />
           $ cal 2006 &gt; year_file      </p>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
