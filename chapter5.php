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
        <h1 align="center">	PATH NAMES</h1>
       
		<div id='501'></div>
	       <p><h2><strong>1. Relative  a nd Absolute Pathnames</strong></h2><br />
          <strong>1.1  Relative Pathnames</strong><br />
          The  use   of  the  &quot;..&quot;  notation   allows  us  to   navigate  the  directory   tree  structure.  The   &quot;..&quot;  symbol  means   &quot;parent directory.&quot; Names with &quot;..&quot; in them are relative  names because their meaning depends on where they are issued (the present  working directory). we can string together several &quot;..&quot; symbols,  separated by the / symbol and other directory names, to change directories. For  example, if we are in portfolio and want to change to mary, we can do this with  a cd command followed by the relative pathname between portfolio and mary like  this  (first using pwd to show where we  are):<br />
          <strong>$ pwd</strong><br />
          <strong>/users/john/portfolio</strong><br />
          <strong>$cd ../../mary</strong><br />
          <strong>$pwd</strong><br />
          <strong>/users/mary</strong><br />
          <strong>$</strong><br />
          Directory or file references starting with .. are relative  pathnames.<br />
          Directory or file references starting with a directory name  are also relative pathnames. For example, if we are in the users directory, the  directory reference john/portfolio is a relative pathname:<br />
          <strong>$ pwd</strong><br />
          <strong>/users</strong><br />
          <strong>$cd john/portfolio</strong><br />
          <strong>$pwd</strong><br />
          <strong>/users/john/portfolio</strong><br />
        <strong>$</strong>        
        <p><strong>1.2  Absolute Pathnames</strong><br />
          If  we  string   together  the  unique   name  of  all   the  intervening  subdirectories  in   the  file  system   to  a  particular subdirectory, we have created the  absolute pathname for that directory. The absolute pathname allows us to switch  to a  directory  no matter what  my present   working directory is.  Absolute  pathnames  always  start   with a  &quot;/&quot;.  we  can  navigate the file system by using absolute pathnames. So we could do something  like this:<br />
          <strong>$ pwd</strong><br />
          <strong>/users/john</strong><br />
          <strong>$ cd /users/mary</strong><br />
          <strong>$ pwd</strong><br />
          <strong>/users/mary</strong><br />
          <strong>$ cd /tmp</strong><br />
          <strong>$ pwd</strong><br />
          <strong>/tmp</strong><br />
          <strong>$ cd /users/john/portfolio</strong><br />
          <strong>$ pwd</strong><br />
          <strong>/users/john/portfolio</strong><br />
          <strong>$</strong><br />
          Every  directory   or  file  on  the  file   system has  a  unique   absolute  pathname.  Although john   may  create a file called  &quot;test.txt&quot;  in  his  home  directory   and  mary  may   create  a  file   called  test.txt  in   her  home  directory,   the  absolute pathnames of these  files are different. John's is called /users/john/test.txt, and Mary's is /users/mary/test.txt.<br />
        <div id='502'></div>
        <h2><strong>2.Directory Abbreviations</strong></h2></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="115" valign="top"><br />
              <strong>Keyword </strong></td>
            <td width="523" valign="top"><p><strong>Description</strong></p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>~</p></td>
            <td width="523" valign="top"><p>Your home (login) directory</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>~username</p></td>
            <td width="523" valign="top"><p>Another user's home directory</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>.</p></td>
            <td width="523" valign="top"><p>Working (current)  directory</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>..</p></td>
            <td width="523" valign="top"><p>Parent of working directory</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>../..</p></td>
            <td width="523" valign="top"><p>Parent of parent directory</p></td>
          </tr>
        </table>
        <p><strong>Examples</strong><br />
        </p>
        <p><strong>cp foo bar</strong><br />
          Copy a file named &quot;foo&quot; (in the current  directory); name the copy &quot;bar&quot;<br />
          </p>
        <p><strong>cp foo ~/Documents</strong><br />
          Copy a file named &quot;foo&quot; (in the current directory)  into your Documents directory<br />
          </p>
        <p><strong>cp foo ~/Documents/bar</strong><br />
          Copy a file named &quot;a&quot; (in the current directory)  into your Documents directory and name the copy &quot;bar&quot;<br />
          </p>
        <p><strong>cp *.jpg ~/Documents</strong><br />
          Copy all files with names ending in &quot;.jpg&quot; into  your Documents directory<br />
          </p>
        <p><strong>cp -R Documents &quot;Documents backup&quot;</strong><br />
          Copy an entire directory named &quot;Documents&quot;; name  the copy &quot;Documents backup&quot;. The quotes are needed because of the  space in the directory name.<br />
          </p>
        <p><strong>sudo cp -Rp /Users &quot;/Users backup&quot;</strong><br />
          Copy the entire   /Users directory (including all of the user home folders inside  it), preserving as much as  possible   of the files' information (ownership, permissions, etc, but not resource  forks) as cp knows how to; name the copy &quot;Users backup&quot;. Root access  is required to use -p, so the example uses sudo to get root access temporarily.      </p>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
