<?php

include '../teamplate/head.php'
?>

<div class="animsition">

    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../../upload/logo1.png" alt="OSM">
                            </a>
                        </div>
                        <div class="login-form">
                            
                            <form action="../controllers/Login.php" method="post" onsubmit="return checked();" name="login" id="login" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                              
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                               
                            </form>
                            <div class="register-link">
                                <p>
                                    
                                      
                                    <a href="../views/forget-pass.php">Password retrieval</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  <?php
  
  include '../teamplate/script.php'
  ?>

</div>


