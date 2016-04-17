<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

<!-- begin carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/image1.jpg" alt="ภาพสวย">
      <div class="carousel-caption">
        ภาพวิว
      </div>
    </div>
    <div class="item">
      <img src="images/image2.jpg" alt="ภาพสวย">
      <div class="carousel-caption">
        ภาพวิว
      </div>
    </div>
      <div class="item">
      <img src="images/image3.jpg" alt="ภาพสวย">
      <div class="carousel-caption">
        ภาพวิว
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end carousel -->

        <div class="row">
            <div class="col-lg-4">
                <h2>Day I</h2>
                <p>
<li>Installation Yii Application</li>
<li>MVC Concept</li>
<li>Using Yii Framework</li>
<li>Model Controller และ View</li>
<li>Gii Generator</li>
            </p>
            </div>
            <div class="col-lg-4">
                <h2>Day II</h2>

                <p>
<li>Array in Yii Framework</li> 
<li>Routing</li> 
<li>Themes</li> 
<li>Database</li> 
<li>Gridview</li> 
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Day III</h2>

                <p>
<li>Extension Installation</li> 
<li>Data manipulations</li> 
<li>Graph manipulations</li> 
<li>Integration</li> 
                </p>
            </div>
        </div>
    </div>
</div>
