<?
if(isset($_GET['error_exp']))
        {
            echo "<div class='alert alert-danger'>".MEMBER_EXP."</div>";
        }?>
<?php
   if($this->session->userdata('is_logged_in'))
                    {
                    ?>
    

<link href="<?php echo base_url().'../assets/css/profile.css' ?>" rel="stylesheet">
 
<div style="margin-top: 50px;"></div>
<div class="row">
  <div class="col-md-4">
      <table>
          <tr>
              <td style="width: 20%;"></td>
              <td style="width: 20%;"></td>
              <td style="width:80%;border: #000 solid thin;border-radius: 58px;">
                  <img class="profile-img" style="width: 100%;padding-top: 10px;padding-right: 5px;padding-bottom: 5px;padding-left: 10px;"   src="<? echo base_url().'../assets/img/Icon-Student-Small.png'?>">
                  <p><center><a style="text-decoration:underline;color: #000">My Profile </a></center></p>    
              </td>
              <td >
                  <p class="editProfile">
                      <a href="<?=base_url()?>user/edit_children_profile"><font color="white">Edit profile</font></a>
                  </p>
              </td>
          </tr>  
          
          <tr>
              <td style="width: 20%;"></td>
              <td colspan="2">
                  <ul class="profile">
                      <li >
                          <a href="view_report/<?=$this->session->userdata('user_id')?>"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-ReportCard.png'?>" alt="" height="30px" />My Report Card</a>
                      </li>
                       <li >
                           <a href="<?=base_url().'user/view_assign_quiz'?>"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchBag.png'?>" alt="" height="30px" />My School Bag</a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MyStickers.png'?>" alt="" height="30px" />My Stickers </a>
                      </li>
                      <li >
                          <a href="#"><img style="margin-right:10px;" src="<? echo base_url().'../assets/img/Icon-MySchHolidays.png'?>" alt="" height="30px" />My School Holidays</a>
                      </li>
                  </ul>
              </td>   
              
          </tr>
          
      </table>
      </div>
        
    
    <div class="col-md-7">
        <div style="border:#000 solid thin;background-color:#DFF9FA;border-radius: 10px; ">
            <br> <p class="sec"><b>About Me</b></p>  
           
            <div style="border:#000 solid thin;background-color:#ffffff;border-radius: 10px;margin: 20px; ">
                <br>
                <p class="sec"><b>Full Name</b>:<?=$child->name; ?></p> 
                <hr>
                <p class="sec"><b>Member Since</b>: <? echo date("jS F, Y", strtotime($child->member_Since)); ?></p> 
                <hr><p class="sec"><b>Last Login</b>:  <? echo date("jS F, Y", strtotime($child->last_login)); ?></p> 
                <hr><p class="sec"><b>Today's mood</b>:  <?=$child->mood; ?></p> 
                <hr>
                <div class="plast">
                    <br>
                    <p class="sec" style="text-decoration:underline;"><b>Last journal Entry:</b>: 1 january,2014</p>
                    <p class="sec">
                        <br>
                  hello thi is my pen hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen hello thi is my pen 
                  hello thi is my pen 
                  hello thi is my pen hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen hello thi is my pen 
                  hello thi is my pen 
                  hello thi is my pen hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen 
                  hello thi is my pen hello thi is my pen hello thi is my pen 
                  hello thi is my pen 
                </p>
                </div>
            </div>
            
            
        </div>
    </div>
</div>

<?php

                    }
                    ?>