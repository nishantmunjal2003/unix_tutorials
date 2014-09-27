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
        <h1 align="center">Administration File System and General System Administration</h1>
        <p ><h2><strong>Device Files-</strong></h2><br />
          The definition of a file has been  broadened by unix by declaring all the physical devices as a file. It includes  tapes, printer, floppy drive, hard disks and terminals.<br />
          Any output directed to it will be  reflected onto the respective physical associative with the filename. Whenever  you are issuing a command to print a file, actually you are directing the  file&rsquo;s output to the file associated with the printer. The kernel takes care of  this mapping, these special files to respective devices.<br />
          $ls –l /dev<br />
        This listing will reveal two  vital points:        
        <ul>
          <li>-Device  files can be grouped into mainly two categories block and character devices  depending on the first character of the permission field (b or c).</li>
          <li>-The  fifth field–normally representing the size for other files–consist of a pair of  numbers (major and minor numbers). A device file contains no data.</li>
        </ul>
        <p><strong>Block and Character devices:</strong><br />
          Floppy drive, cdrom, hard disk  comes into this section because to whenever a user performs a write operation  firstly it is written into chunks or blocks.   And when it performs the read operation, the buffer cache accessed the  recently used data.  So these devices are  using buffer and writing there data into blocks for such devices prefix &lsquo;b&rsquo; is  used.<br />
          The terminal, tape drive and  printer are character special devices because the read/write operation ignores  the buffer cache and access the device directly.<br />
  </p>
        <p><strong>Major and Minor No.:</strong><br />
          The set of routines is requires  to operate specific devices is known as device drivers. When a device is called  the kernel passes some parameters for it to act properly. So the kernel must  know not only the type of device but also certain details of it (like density,  partition no of it).<br />
          The fifth column shows the two  no. which are major and minor numbers, major no. shows actually the type of  device all hard disk or same kind of hardware will have the same major numbers  but the minor will be different.<br />
          Minor no. tells the kernel about  the parameters to operate the particular device.</p>
        <p><strong>Significance of the Device Names:</strong><br />
          Unix device files is that the  same device can often be accessed with several different filename, this is  sometimes required to provide backward compatibility and for associating a separate  device with specific function.<br />
  </p>
        <p><strong>The UNIX File System-</strong></p>
        <ul>
          <li>etc : Contains all system configuration files  and the files which maintain information about the user and group.</li>
          <li>Bin : Contains all binary executables </li>
          <li>usr : default directory provided by UNIX OS to  create users home directories and contains manual pages</li>
          <li>tmp: System or users temporary files which will  be removed when the system reboots.</li>
          <li>dev: Contains all device files i.e logical names  to physical devices.</li>
          <li>devices : Contains all the device files. i.e.  physical names to physical devices.</li>
          <li>home : default directory allocated for the home  directories of normal users when the administrator don&rsquo;t specify any other  directory.</li>
          <li>var : contains all the system log files and  message files.</li>
          <li>sbin : Contains all the system administrator  executables files.</li>
        </ul>
        <p><strong>Partitions:</strong><br />
          Partition divides hard disk into many logically  independent disk and accessed by its own device files. And to use a partition,  it is requires to create a file system on it. File system defines a directory  structure. Some rules and the advantages of the partitions are:</p>
        <ul>
          <li>-Data  is growing day by day but a partition should restrict it spill it over to other  partition.</li>
          <li>-If  one area is corrupted then other should be shielded for that harmful things  which corrupt that area.</li>
          <li>-If  the system have adequate number of partitions, each partition can be backed up  separately into a single volume of tape. The administrator can have different  backup schedules for the different partitions.</li>
        </ul>
        <p><h2><strong>File System</strong></h2><br />
        In unix is configured with multiple file system  where each has its own directory headed by root . but usually we see one root  that&rsquo;s because all have the same file system and becomes single one at a time  of use.</p>
        <p>Each file system is organized in a sequence of  blocks of 1024 bytes and generally has three four components.</p>
        <ul>
          <li>-The  boot block – contains a small boot program.</li>
          <li>-The  super block – it contains global information about the file system and it also  maintains a free list of inodes and data blocks that can be immediately  allocated be the kernel when creating a file.</li>
          <li>-The  inode block – contains a table for every file system. All attributes of a file  or directory stored in this area except the name of the file.</li>
          <li>-The  data block – contains the files or programs of the user.</li>
        </ul>
        <p><strong>File System Components</strong></p>
        <p><strong>Inode Blocks</strong><br />
          every file has an inode – a 128 byte table that  contains virtually everything you could possibly need to know about a file. All  inodes are stored into a contiguous inode blocks. Each 128 byte inode contains  –</p>
        <ul>
          <li>File  type (regular, directory, device etc…)</li>
          <li>Number  of links</li>
          <li>Numeric  user id of the user</li>
          <li>Numeric  group user id of the user.</li>
          <li>File  mode</li>
          <li>Number of bytes in a file</li>
          <li>Date  and time of the last modification of the file data.</li>
          <li>Date  and time of last access of the file data.</li>
          <li>Date and time of last change of the inode.</li>
          <li>The array of 15 pointers to the file.</li>
        </ul>
        <p>Whenever a file is opened its inode is copied to  the memory inode table and then kept synchronizing periodically with the disk  copy.<br />
          And 15 pointers are required to get the different-2  information about a file using ls command.</p>
        <p><strong>The  Superblock </strong><br />
          It contains global file information about disk  usage and availability of data blocks and inodes. So its information should  therefore be correct for healthy operation of the system. It mainly contains –</p>
        <ol start="1" type="1">
          <li>The size of the file       system.</li>
          <li>The length of the file       systems logical block.</li>
          <li>Last time of updating.</li>
          <li>The number of free       data blocks available and free partial list of immediately allocated free       data blocks.</li>
          <li>Number of free inodes       available and free partial list of immediately usable inodes.</li>
          <li>The state of the file       system.(clean or dirty)</li>
        </ol>
        <p>Kernel also maintains a copy of the superblock in  memory. It reads and write this copy when controlling allocation of inodes and  data block.<br />
          So the copy cannot be newer in disk as in memory.  And till the superblock is corrupt unix will not boot for this kind of problem  many systems have multiple superblocks written in different area of disk.</p>
        <p><strong>Data Blocks </strong><br />
          The smallest data block that can be read or written  by the disk controller is 512 bytes. The kernel reads and writes the data using  different block size and this block is often referred to as a logical block.<br />
          Every block is identifiable by an address- a number  that refers to the position of block in data block area. The block containing  data is known as direct blocks.</p>
        <p>When a file expands the kernel may not find the  adjacent block free. So it has to locate the expanded part in some other part  of disk. This slows down read/write operation and leads to the disk  fragmentation.<br />
          Inode keeps track of all the direct block  addresses, but inode can store only 12 of them. So the file system also  contains indirect blocks. And the inodes keeps track of all the indirect  blocks.</p>
        <p><strong>Boot Block </strong><br />
          This is the master boot record (MBR). The boot block  contains the partition table and the a small &ldquo;bootstrapping&rdquo; program.<br />
          When the system is booted the system BIOS looks for  the first hard disk and loads the entire segment of the boot block into memory.  It then hands over the control to the bootstrapping program. This in turn loads  the kernel into memory.</p>
        <p><h2><strong>Mounting and  Unmounting File System:</strong></h2></p>
        <p>Before mounting the file system to the we need to  check the logical name of it by issuing command<br />
          </p>
        <p><strong>$ sudo fdisk –l</strong></p>
        <p><strong>How to  mount/unmount Windows partitions (FAT) manually, and allow all users to  read/write - </strong></p>
        <p>    e.g.  Assumed that /dev/hda1 is the location of Windows partition (FAT) <br />
          Local  mount folder: /media/windows </p>
        <p>    <strong>* To mount Windows partition </strong></p>
        <p><strong>$ sudo mkdir /media/windows</strong><br />
          <strong>$ sudo mount /dev/hda1 /media/windows/ -t  vfat -o iocharset=utf8,umask=000</strong></p>
        <p>    <strong>* To unmount Windows partition </strong></p>
        <p><strong>$ sudo umount /media/windows/</strong></p>
        <p><strong>How to  mount/unmount Windows partitions (FAT) manually, and allow all users to  read/write - </strong></p>
        <p>    e.g.  Assumed that /dev/hda1 is the location of Windows partition (FAT) <br />
        Local  mount folder: /media/windows </p>
        <p>    <strong>* To mount Windows partition </strong></p>
        <p><strong>$ sudo mkdir /media/windows</strong><br />
          <strong>$ sudo mount /dev/hda1 /media/windows/ -t  vfat -o iocharset=utf8,umask=000</strong></p>
        <p><strong>    * To unmount Windows partition </strong></p>
        <p><strong>$ sudo umount /media/windows/</strong></p>
        <p><strong>How to  mount/unmount network folders manually, and allow all users to read/write - </strong></p>
        <p>e.g.  Assumed that network connections have been configured properly <br />
          Network  computer's IP: 192.168.0.1 <br />
          Network  computer's Username: myusername <br />
          Network  computer's Password: mypassword <br />
          Shared  folder's name: linux <br />
        Local  mount folder: /media/sharename </p>
        <p>    <strong>* To mount network folder </strong></p>
        <p><strong>$ sudo mkdir /media/sharename</strong><br />
          <strong>$sudo mount //192.168.0.1/linux  /media/sharename/ -o username=myusername,password=mypassword,dmask=777,fmask=777.</strong></p>
        <p><strong>    * To unmount network folder </strong></p>
        <p><strong>$ sudo umount /media/sharename/</strong></p>
        <p><h2><strong>To find out  the free disk space (df) and disk usage (du)</strong></h2></p>
        <p><strong>Disk-free-</strong><br />
          Unix file system as one single tree structure with  a single root directory. But there can be multiple disks and each will have its  own root and file system.<br />
        So to find out the free space in all the disk &lsquo;df&rsquo;  is the command.</p>
        <p><strong>                $ df</strong><br />
          <strong>                </strong><br />
          <strong>                $ df partition_name</strong></p>
        <p><strong>Disk-Usage-</strong><br />
          It will show you all the usages of disk and also  can find out the disk usage of specific folder and all the files of the folder.<br />
          <br />
  <strong>$ du – will show the details for all files and directories.</strong></p>
        <p><strong>$ du /home/oracle/ -  will show all the details for all the files  and directories in home/oracle.</strong><br />
          <strong>                </strong><br />
          <strong>$ du –s /home/oracle – will show summary.</strong></p>
        <p><strong>Compression  of Files using - Compress, gzip and zip:</strong></p>
        <p>To save the space compression is used. <br />
          Compress and gzip work with multiple files and  remove the original files after it but the zip compress the files and retains the  original file. But can also group multiple files into a single file.</p>
        <p><strong>                $ compress filename</strong><br />
          <strong>                $ uncompress filename</strong></p>
        <p><strong>                $ gzip filename</strong><br />
          <strong>                $ gunzip filename</strong></p>
        <p><strong>                $ zip filename</strong><br />
          <strong>                $ unzip filename</strong><br />
          <strong>Printing a  file ls and cancel–</strong><br />
          <strong>                $ lp filename</strong><br />
          <strong>                $ lp –dlaser filename –  providing the printer name also.</strong><br />
          <strong>                $ lp –t &ldquo;First&rdquo; filename – will  show First in the first page title.</strong></p>
        <p><strong>                $ cancel laser-  cancel current job on printer laser.</strong></p>
        <p><strong>                $lpq  -  to  know the number of jobs.</strong><br />
          <strong>                </strong><br />
          <strong>                $ lprm id– if you want to remove  any job of the printer.</strong><br />
          <strong>                $ lprm - - removes all the jobs  owned by the user.</strong></p>
        <p><h2><strong>File System  Checking fsck-</strong></h2></p>
        <p>Delaying updating superblock and inode block from  the memory copy of both, leaves lot of scope for the file system inconsistency.  If the power goes off or system shutdown due to some failure in that case  superblock are not updated may cause serious error or corruption. The common  are – </p>
        <ul>
          <li>Two  or more inodes claiming the same disk block.</li>
          <li>A  block marked as free but not listed in superblock.</li>
          <li>An  inode neither marked free nor in use or having a bad block number that is out  of range.</li>
          <li>Mismatch  between the file size specified in inode and the number of data blocks  specified in the address array.</li>
        </ul>
        <p>Fsck commands are used to check and repair a  damaged file system. On many systems, file systems are marked as &ldquo;dirty&rdquo; and  &ldquo;clean&rdquo;. Fsck then checks only the dirty file systems during the next startup.</p>
        <p><strong>                $ fsck  </strong><br />
          <strong>                $ fsck /dev/sda5/</strong></p>
        <p>It does following things – </p>
        <ul>
          <li>Phase  1- Check Blocks and Sizes </li>
          <li>Phase  2 – Check path names</li>
          <li>Phase  3 – Check connectivity</li>
          <li>Phase  4 – Check Reference counts</li>
          <li>Phase  5 - Check free list.</li>
        </ul>
        <p><strong>Useradd,  usermod and userdel –</strong></p>
        <p><strong>User-add:</strong><br />
          <strong>#useradd –u 210 –g dba –d /home/oracle –s /bin/ksh –m oracle </strong></p>
        <p>Username –oracle<br />
          User ID – 210<br />
          Group – dba<br />
          Home Path - /home/oracle<br />
          Shell - /bin/ksh (optional)<br />
          -m option- ensures that the home directory is  created added.<br />
          <br />
          Useradd command creates the user entry in  /etc/passwd</p>
        <p><strong>#passwd oracle</strong></p>
        <p>Will set the new password for the user oracle.</p>
        <p><strong>/etc/passwd</strong>:  all the information of user stored in here except the encryption technique of  password. The encryption information is stored in <strong>/etc/shadow</strong>.</p>
        <p><strong>oracle : x : 210 : 241: /home/oracle : /bin/ksh</strong></p>
        <p><strong>user-mod: </strong></p>
        <p><strong># usermod –s /bin/bash oracle</strong></p>
        <p>used to modify some parameters of user. Like  sometimes need to change the login shell.</p>
        <p><strong>user-del:</strong> <br />
          <br />
  <strong># userdel oracle</strong></p>
        <p>this commands removes the user from the system.  This removes all entries but the users home directory does not get deleted.</p>
        <p><strong>Role of init  in startup and shutdown:</strong><br />
          The startup and shutdown process are controlled by  automated shell scripts which are changed quite infrequently.<br />
          The kernel (/stand/unix, kernel/genunix or vmliuz)  is loaded into the memory and it starts spawning further process. The most  important of these is  /sbin/init with  PID 1, which is responsible for the birth of all subsequent processes. Role of  init –</p>
        <ul>
          <li>It  controls the run levels (the system states) and decides which process to run  (and kill) for each run level.</li>
          <li>It  spawns a getty process at every terminal or modem port so that users can log  in.</li>
          <li>It  also ensures that all the system daemons are running.</li>
        </ul>
        <p>&nbsp;</p>
        <p><strong>init Run  levels-</strong></p>
        <p>0 – system shutdown<br />
          1 – System administration mode (local file system  mounted)<br />
          2 – Multiuser Mode<br />
          3 – Full Multiuser Mode<br />
          6 – Shutdown and reboot mode<br />
          S or s – single user more (file system mounted)<br />
          <br />
  <strong>                # init 0</strong></p>
        <p>To check the current run level you are using &lsquo;<strong>who –r</strong>&rsquo;.</p>
        <p><strong>/etc/inittab  – </strong><br />
          The behavior of init controls by /etc/inittab. Init  reads all the process from inittab. Its fields determine the process that  should be spawned for each of the <strong>init</strong> run levels.</p>
        <p><strong>Backing Up  Files (tar, dump, cpio, dd)-</strong><br />
        <strong>dd:</strong> it  was a very powerful copying command and mainly for administrator. Previously it  was used to copy file system but now its use is restricted to only the floppy  diskettes.</p>
        <p>Insert first floppy drive and copied data  temporarily.</p>
        <p><strong>#dd if=/dev/sda4/ of=$$ bs=147456</strong></p>
        <p>Insert second floppy drive and temporary data is  copied</p>
        <p><strong>                #dd if=$$ of=/dev/sda4/  bs=147456</strong><br />
          if =input filename<br />
          of = output filename<br />
          bs =block size</p>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
