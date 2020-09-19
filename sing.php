<div class="sing-up">
    <div class="header-sing">
        <p class="h4">
            Creat new acount
        </p>
      <p class="close-sing-up">
        <i class="fa fa-close fa-2x"></i>
      </p>
    </div>
  <form>
    <input type="text" name="" value="" placeholder="Username" class="form-control">
    <i class="fa fa-user sing-icon"></i>
      <input type="email"  name="" value="" placeholder="Enter email" class="form-control">
      <i class="fa fa-envelope sing-icon"></i>
      <input type="password" placeholder="password" name="" value="" class="form-control">
      <i class="fa fa-key sing-icon"></i>
      <!-- Default unchecked -->
       <div class="custom-control custom-checkbox">
           <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
           <label class="custom-control-label" for="defaultUnchecked">Remember me </label>
       </div>
       <div class="text-center">
         <div class="btn btn-primary">
            Register
         </div>
         <div class="btn btn-danger">
            Login
         </div>
       </div>
  </form>
</div><?php // XXX: End Sing-up ?>
<style media="screen">
.sing-up{
  position: fixed;
  background: #fff;
  width: 550px;
  z-index: 6664;
  top: -10000%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.sing-up input{
  margin-top: 18px;
  margin-bottom: 18px;
  border-radius: 10px;
  padding-left: 30px;
}
.sing-up i.sing-icon{
  height: 0;
  float: left;
  position: relative;
  top: -46px;
  left: 10px;
  color: #7d858c;
}
  .sing-up{
    padding: 0;
    border-radius: 0;
  }
  .header-sing{
    display:flex;
    background: #1572E8;
    color: white;
    padding: 10px 10px 0 10px;
  }
  .header-sing .h4{
    flex: 1;
  }
  .header-sing  .fa{
    padding: 0 20px;/*lois de fitts*/
  }
  .sing-up form{
    padding: 10px;
  }
</style>
<?php
/*
  close-sing-up

*/

 ?>
