@include("/frontend/common/header")
<style>
/* Set the width and overflow properties to handle sliding */
.cards-container {
  width: 100%;
  overflow: hidden;
  position: relative;

}

.group1-sub{
  padding-left: 172px
}

.cards {
  display: flex;
  transition: all 0.5s ease; /* For smooth sliding effect */
}

.leftSlider{
  width: 48px;
height: 48px;
flex-shrink: 0;
fill: #FFF;
stroke-width: 1px;
stroke: rgba(44, 44, 44, 0.20);
filter: drop-shadow(10px 10px 35px rgba(0, 0, 0, 0.05));
}

.card {
  /* Your card styling */
}

/* Hide the slideRightButton when all cards are visible */
#slideRightButton {
  display: none;
}

/* Show the slideRightButton when there are hidden cards */
.show-button #slideRightButton {
  display: block;
}

.slider-button-left,
.slider-button-right {
  position: absolute;
  top: 50%; /* Adjust this value as needed */
  transform: translateY(-50%);
}

.slider-button-left {
  left: 0;
}

.slider-button-right {
  right: 0;
}

.group1{
  background: #FFF9F5;
}
.btn-combine{
  border-radius: 6px;
background: #FFF;
box-shadow: 10px 10px 35px 0px rgba(0, 0, 0, 0.15);
display: inline-flex;
padding: 6px;
align-items: flex-start;

}
.btn1{
  display: flex;
height: 56px;
padding: 16px 24px;
flex-direction: column;
justify-content: center;
align-items: center;
gap: 10px;
border-radius: 6px;
background-color: white

color: rgba(44, 44, 44, 0.80);
text-align: right;
font-family: Poppins;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: 24px; /* 120% */
}
.btn2{
  display: flex;
height: 56px;
padding: 16px 24px;
flex-direction: column;
justify-content: center;
align-items: center;
gap: 10px;

border-radius: 6px;
background: var(--primary, #FF6C0B);

color: #FFF;
text-align: right;
font-family: Poppins;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 120% */
}


.top-title{
  width: 200px
  color: var(--f, #2C2C2C);
font-family: Poppins;
font-size: 58px;
font-style: normal;
font-weight: 600;
line-height: 110%; /* 63.8px */
}

.tagline{
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 32px; /* 177.778% */
opacity: 0.800000011920929;
}

.search{
  display: flex;
width: 100%;
padding: 30px 40px;
gap: 20px;
border-radius: 6px;
background: #FFF;
box-shadow: 4px 10px 40px 0px rgba(163, 191, 185, 0.20);
color: rgba(44, 44, 44, 0.80);
text-align: right;
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 500;
line-height: 24px; /* 171.429% */
}

.item{
  display: flex;
padding: 10px 15px;
align-items: center;
gap: 30px;
border-radius: 6px;
border: 1px solid rgba(44, 44, 44, 0.20);
}

.group2-sub{
  padding-left:172px
}
.group2-heading{
  color: #2C2C2C;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: 140%; /* 50.4px */

}

.cards{
  display: flex;
align-items: flex-start;
gap: 20px;

}

.card{
  width: 285px;
  height: 383px;
  flex-shrink: 0;
  border-radius: 6px;
border: 1px solid rgba(255, 108, 11, 0.10);
background: #F9F9FB;

}

.img-content{
  width: 265px;
height: 150px;
flex-shrink: 0;
}
.card-title{
  width: 255px;
  color: #2C2C2C;
font-family: Poppins;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: 30px; /* 150% */
}
.icon{
  width: 30px;
height: 30px;
flex-shrink: 0;
border-radius: 30px;
border: 1px solid #D3E1E3;
}
.username{
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: normal;
}
.ico{
  width: 30px;
height: 30px;
flex-shrink: 0;
}
.ratings{
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 500;
line-height: normal;
}
.line{
  width: 260px;
height: 1px;
background: #E3E3E3;
}
.price_register{
  display: flex;
justify-content: space-between;
align-items: center;
align-self: stretch;
}
.price{
  color: var(--primary, #FF6C0B);
  text-align: center;
  font-family: Poppins;
  font-size: 16px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
  color: var(--primary, #FF6C0B);
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;
}
.rectanglee{
  width: 144px;
height: 34px;
flex-shrink: 0;
fill: rgba(255, 108, 11, 0.10);
}
.register-image{
  width: 24px;
height: 24px;
flex-shrink: 0;
border-radius: 24px;
border: 1px solid #D3E1E3;
background: url(<path-to-image>), lightgray 50% / cover no-repeat;
}

.group3{
  width: 100%;
height: 1300px;
flex-shrink: 0;
background: #FFF9F5;
}
.group3-cards{
  display: inline-flex;
flex-direction: column;
align-items: flex-start;
gap: 30px;
padding-left:172px
}
.group3-title{
  color: #2C2C2C;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: 140%; /* 50.4px */
}

.group3-cards-container{
  display: flex;
align-items: flex-start;
gap: 30px;
margin-top:100px
}

.pagination{
  display: flex;
width: 1200px;
justify-content: space-between;
align-items: center;
}

.firstnumber{
  display: flex;
width: 33px;
padding: 12px;
justify-content: center;
align-items: center;
flex-shrink: 0;
align-self: stretch;
border-radius: 68px;
background: #FFE6D6;
color: var(--primary, #FF6C0B);
text-align: center;
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: 26px; /* 162.5% */
}
.previous{
  color: rgba(44, 44, 44, 0.30);
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: 26px; /* 162.5% */
}
.othernumbers{
  color: rgba(44, 44, 44, 0.80);
text-align: center;
font-feature-settings: 'clig' off, 'liga' off;

/* Typography/Body 2 (Regular) */
font-family: Inter;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 26px; /* 162.5% */
}

.pag{
  display: flex;
width: 1200px;
justify-content: space-between;
align-items: center;
}
.group5 {
  width: 1440px;
  height: 700px;
  background: #FFF;

}
.group5-sub{
  display: flex;
  padding-left:172px
}

.column-left,
.column-right {
  flex: 1;
  height: 100%;
}

.column-left {
  /* Styles for the left column */
}

.column-right {
  /* Styles for the right column */
}


.group5-sub{
display: flex;
justify-content: center; /* Center horizontally */
align-items: center; /* Center vertically */
}

.group5-title{
  color: #2C2C2C;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: 140%; /* 50.4px */
}

.testm{
  width: 577px;
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 26px;
font-style: normal;
font-weight: 400;
line-height: 38px; /* 146.154% */
}
.tutortitle{
  color: #61646A;
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 28px; /* 175% */
}

.activedot{
  width: 11px;
height: 11px;
flex-shrink: 0;
fill: var(--primary, #FF6C0B);
}

.unactivedot{
  width: 9px;
height: 9px;
flex-shrink: 0;
fill: rgba(97, 100, 106, 0.30);
}

.unactivebutton{
  width: 48px;
height: 48px;
flex-shrink: 0;
stroke-width: 1px;
stroke: rgba(97, 100, 106, 0.30);
backdrop-filter: blur(10px);
padding-left:417px
}

.activebuttonnext {
  display: inline-block;
  position: relative;
  stroke: #FF6C0B;
}

.centered-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(0deg);
}

.group6{
  width: 100%;
height: 633px;
flex-shrink: 0;
background: #FFF9F5;
backdrop-filter: blur(20px);
}
.group6-sub{
  display:flex;
  padding-left:172px
}
.group6-left{
  flex:1;
  height:100%
}
.group6-right{
  flex:1;
  height:100%
}
.group6-right-title{
  width: 544px;
  color: #2C2C2C;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: 140%; /* 50.4px */
}
.group6-right-description{
  width: 597px;
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 32px; /* 177.778% */
opacity: 0.800000011920929;
}

.joinastutorbutton{
  display: flex;
padding: 16px 35px;
flex-direction: column;
justify-content: center;
align-items: center;
gap: 10px;
border-radius: 6px;
background: var(--primary, #FF6C0B);
border-color: var(--primary, #FF6C0B);
}

.joinastutortext{
  color: #FFF;
text-align: right;
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 150% */
}

.joinasstudentbutton{
  border-radius: 6px;
  border: 1px solid var(--primary, #FF6C0B);
  display: flex;
padding: 16px 35px;
flex-direction: column;
justify-content: center;
align-items: center;
gap: 10px;
}

.joinasstudenttext{
  color: var(--primary, #FF6C0B);
  text-align: right;
  font-family: Poppins;
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: 24px; /* 150% */
}
.group7{
  width: 100%;
height: 800px;
}
.group7-sub{
  padding-top:120px;
  padding-left:120px;
  padding-left:172px
}
.group7-heading{
  color: #2C2C2C;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: 140%; /* 50.4px */
}
.group7-flex{
  display:flex;
}
.group7-flex-left{
  flex:1
}
.group7-flex-left-content{
  display: inline-flex;
flex-direction: column;
align-items: flex-start;
gap: 30px;
}
.group7-flex-left-heading{
  color: var(--primary, #FF6C0B);
font-feature-settings: 'clig' off, 'liga' off;
font-family: Poppins;
font-size: 24px;
font-style: normal;
font-weight: 500;
line-height: 30px; /* 125% */
}
.group7-flex-left-content{
  width: 567px;
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 28px; /* 175% */
opacity: 0.800000011920929;
}

.accordion-content{
  width: 450px;
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 28px; /* 175% */
opacity: 0.800000011920929;
}

.accordion-inactive{
  color: rgba(44, 44, 44, 0.80);
font-feature-settings: 'clig' off, 'liga' off;
font-family: Poppins;
font-size: 24px;
font-style: normal;
font-weight: 500;
line-height: 30px; /* 125% */
}

.footer{
  width: 100%;
height: 420px;
flex-shrink: 0;
background: #FFF9F5;
}
.footer-content{
  padding-top:60px;
  padding-left:120px;
  display:flex
}
.footer1{
  flex:1
}
.footer2{
flex:1;
padding-left:81px
}
.footer3{
  flex:1
}.footer4{
  flex:1
}.footer5{
  flex:1
}


.footer-top-heading{
  width: 160px;
  color: #2C2C2C;
font-feature-settings: 'clig' off, 'liga' off;
font-family: Poppins;
font-size: 22px;
font-style: normal;
font-weight: 500;
line-height: 30px; /* 136.364% */
padding-bottom:18px
}
.footer-heading-item{
  width: 123.711px;
  color: rgba(44, 44, 44, 0.50);
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 32px; /* 177.778% */
padding-bottom:8px
}

.footer-head{
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 32px; /* 177.778% */
}

.copyright{
  color: rgba(44, 44, 44, 0.50);
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: 0.28px;
}
</style>

<div class="group1">
  <br><br>
<div class="group1-sub">
<div class="btn-combine">
  <button class="btn btn1">Private Lessons</button>
  <button class="btn btn2">Group Lessons</button>
</div>
<br><br>
<div class="top-title" style="width:830px">
  Online English classes to practice speaking together
</div>
<br>
<div class="tagline">Learn, speak and connect with a small group of students, guided by an expert tutor</div>
<br><br>
<div class="search">
<select class="item"><option>English Level</option></select>
<select class="item"><option>Topic</option></select>
</div>
      </div>
    </div>

    <div class="group2">
      <br>
      <div class="group2-sub">

        <div class="group2-heading">Starting today</div>
        <br>
        <div class="cards-container">
        <div class="cards">
        <div class="card">

         <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
         <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
         <div>
         <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
         <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
       </div>
       <br>
       <div class="line"></div>
       <br>
       <div class="price_register" style="display:flex">
       <div class="rectanglee">
       <div class="price">$112.00 / Class</div>
     </div>
     </div>
     </div>
     <div class="card">

      <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
      <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
      <div>
      <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
      <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
    </div>
    <br>
    <div class="line"></div>
    <br>
    <div class="price_register" style="display:flex">
    <div class="rectanglee">
    <div class="price">$112.00 / Class</div>
  </div>
  </div>
  </div>
  <div class="card">

   <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
   <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
   <div>
   <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
   <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
 </div>
 <br>
 <div class="line"></div>
 <br>
 <div class="price_register" style="display:flex">
 <div class="rectanglee">
 <div class="price">$112.00 / Class</div>
</div>
</div>
</div>
<div class="card">

 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
 <div>
 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
</div>
<br>
<div class="line"></div>
<br>
<div class="price_register" style="display:flex">
<div class="rectanglee">
<div class="price">$112.00 / Class</div>
</div>
</div>
</div>
<div class="card">

 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
 <div>
 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
</div>
<br>
<div class="line"></div>
<br>
<div class="price_register" style="display:flex">
<div class="rectanglee">
<div class="price">$112.00 / Class</div>
</div>
</div>
</div>
<div class="card">

 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
 <div>
 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
</div>
<br>
<div class="line"></div>
<br>
<div class="price_register" style="display:flex">
<div class="rectanglee">
<div class="price">$112.00 / Class</div>
</div>
</div>
</div>
<div class="card">

 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
 <div>
 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
</div>
<br>
<div class="line"></div>
<br>
<div class="price_register" style="display:flex">
<div class="rectanglee">
<div class="price">$112.00 / Class</div>
</div>
</div>
</div>
</div>
</div>
        </div>
        </div>

      </div>


          <div class="group2">
            <br><div class="group2-sub">
              <div class="group2-heading">Starting today</div>
              <br>
              <div class="cards-container">
              <div class="cards">
              <div class="card">

               <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
               <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
               <div>
               <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
               <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
             </div>
             <br>
             <div class="line"></div>
             <br>
             <div class="price_register" style="display:flex">
             <div class="rectanglee">
             <div class="price">$112.00 / Class</div>
           </div>
           </div>
           </div>
           <div class="card">

            <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
            <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
            <div>
            <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
            <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
          </div>
          <br>
          <div class="line"></div>
          <br>
          <div class="price_register" style="display:flex">
          <div class="rectanglee">
          <div class="price">$112.00 / Class</div>
        </div>
        </div>
        </div>
        <div class="card">

         <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
         <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
         <div>
         <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
         <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
       </div>
       <br>
       <div class="line"></div>
       <br>
       <div class="price_register" style="display:flex">
       <div class="rectanglee">
       <div class="price">$112.00 / Class</div>
      </div>
      </div>
      </div>
      <div class="card">

       <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
       <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
       <div>
       <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
       <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
      </div>
      <br>
      <div class="line"></div>
      <br>
      <div class="price_register" style="display:flex">
      <div class="rectanglee">
      <div class="price">$112.00 / Class</div>
      </div>
      </div>
      </div>
      <div class="card">

       <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
       <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
       <div>
       <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
       <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
      </div>
      <br>
      <div class="line"></div>
      <br>
      <div class="price_register" style="display:flex">
      <div class="rectanglee">
      <div class="price">$112.00 / Class</div>
      </div>
      </div>
      </div>
      <div class="card">

       <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
       <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
       <div>
       <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
       <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
      </div>
      <br>
      <div class="line"></div>
      <br>
      <div class="price_register" style="display:flex">
      <div class="rectanglee">
      <div class="price">$112.00 / Class</div>
      </div>
      </div>
      </div>

      </div>
              </div>
              <br><br><br>
              </div>

            </div>
            <div class="group3">



<br><br>

              <div class="group3-cards">
                <div>
                <div class="group3-title">All group classes</div>
                <br>
                <div class="group3-cards-container">
                <div class="card">

                 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
                 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
                 <div>
                 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
                 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
                </div>
                <br>
                <div class="line"></div>
                <br>
                <div class="price_register" style="display:flex">
                <div class="rectanglee">
                <div class="price">$112.00 / Class</div>
                </div>
                </div>
                </div>
                <div class="card">

                 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
                 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
                 <div>
                 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
                 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
                </div>
                <br>
                <div class="line"></div>
                <br>
                <div class="price_register" style="display:flex">
                <div class="rectanglee">
                <div class="price">$112.00 / Class</div>
                </div>
                </div>
                </div>
                <div class="card">

                 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
                 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
                 <div>
                 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
                 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
                </div>
                <br>
                <div class="line"></div>
                <br>
                <div class="price_register" style="display:flex">
                <div class="rectanglee">
                <div class="price">$112.00 / Class</div>
                </div>
              </div>
                </div>
                </div>

                <div class="group3-cards-container">
                <div class="card">

                 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
                 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
                 <div>
                 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
                 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
                </div>
                <br>
                <div class="line"></div>
                <br>
                <div class="price_register" style="display:flex">
                <div class="rectanglee">
                <div class="price">$112.00 / Class</div>
                </div>
                </div>
                </div>
                <div class="card">

                 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
                 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
                 <div>
                 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
                 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
                </div>
                <br>
                <div class="line"></div>
                <br>
                <div class="price_register" style="display:flex">
                <div class="rectanglee">
                <div class="price">$112.00 / Class</div>
                </div>
                </div>
                </div>
                <div class="card">

                 <img style="margin-left:10px; margin-top:10px" class="img-content" src="groupp/Rectangle 4436.png">
                 <div style="margin-left:10px; margin-top:10px" class="card-title">English conversations with new vocab: Spea...</div>
                 <div>
                 <img src="groupp/Ellipse 2670.png" style="margin-left:10px; margin-top:10px" class="icon"> <span class="username">Brandon S.</span> <span style="width: 1px;height: 16px; background-color: #E3E3E3;"></span>
                 <img src="groupp/ico.png" class="ico"> <span class="ratings">4.9 (220)</span>
                </div>
                <br>
                <div class="line"></div>
                <br>
                <div class="price_register" style="display:flex">
                <div class="rectanglee">
                <div class="price">$112.00 / Class</div>
                </div>
              </div>
                </div>
                </div>
              </div>
            </div>
            <br><br>

            <div class="pag" style="margin-left:100px; margin-right:100px">
              <span style="width: 24px;height: 24px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M9.56982 18.0698L3.49982 11.9998L9.56982 5.92982" stroke="#2C2C2C" stroke-opacity="0.3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M20.5 12L3.67 12" stroke="#2C2C2C" stroke-opacity="0.3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span>
<span class="previous">Previous</span>
<div class="pagination"></div>
              <span class="firstnumber">1</span>
              <span class="othernumbers" style="margin-left:20px">2</span>
              <span class="othernumbers" style="margin-left:20px">3</span>
              <span class="othernumbers" style="margin-left:20px">...</span>
              <span class="othernumbers" style="margin-left:20px">8</span>
              <span class="othernumbers" style="margin-left:20px">9</span>
              <span class="othernumbers" style="margin-left:20px">10</span>

              <div class="pagination"></div>
              <span style="width: 24px;height: 24px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M9.56982 18.0698L3.49982 11.9998L9.56982 5.92982" stroke="#2C2C2C" stroke-opacity="0.3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M20.5 12L3.67 12" stroke="#2C2C2C" stroke-opacity="0.3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span>
<span class="previous">Next</span>
            </div>
            </div>
          </div>
          </div>
          <div class="group5">
            <br><br>
            <div class="container">
              <div class="group5-sub">
              <div class="column-left">
                <br>
                <div class="group5-title">Student Testimonials</div>
              <div class="testm">In my experience all the teachers are very supportive and friendly and the placement process has been very smooth. it’s also no issue talk about whatever you want to</div>
              <br>
              <div class="tutortitle">Qaisar Khan</div>
              <br>
              <span class="activedot"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
              <circle cx="5.5" cy="5.5" r="5.5" fill="#FF6C0B"/>
              </svg></span>
              <span class="unactivedot"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
  <circle cx="4.5" cy="4.5" r="4.5" fill="#61646A" fill-opacity="0.3"/>
</svg>
              </svg></span>
              <span class="unactivedot"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
  <circle cx="4.5" cy="4.5" r="4.5" fill="#61646A" fill-opacity="0.3"/>
</svg>
              </svg></span>
              <span class="unactivebutton"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
  <g filter="url(#filter0_b_78_86)">
    <circle cx="25" cy="25" r="24.5" stroke="#61646A" stroke-opacity="0.3"/>
    <!-- < Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" x="13" y="13">
      <path d="M15.0498 19.9201L8.5298 13.4001C7.7598 12.6301 7.7598 11.3701 8.5298 10.6001L15.0498 4.08008" stroke="#61646A" stroke-opacity="0.3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </g>
  <defs>
    <filter id="filter0_b_78_86" x="-20" y="-20" width="90" height="90" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feGaussianBlur in="BackgroundImageFix" stdDeviation="10"/>
      <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_78_86"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_78_86" result="shape"/>
    </filter>
  </defs>
</svg>
</span>

<span class="activebuttonnext">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
    <circle cx="25" cy="25" r="24.5" stroke="#61646A" stroke-opacity="0.3"/>
  </svg>
  <!-- > Icon - Centered -->
  <svg class="centered-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M8.95019 4.07992L15.4702 10.5999C16.2402 11.3699 16.2402 12.6299 15.4702 13.3999L8.9502 19.9199" stroke="#FF6C0B" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</span>



            </div>
            <div class="column-right">
              <img style="width: 257px; height: 359px; flex-shrink: 0;" src="groupp/image 36.png">
            </div>
          </div>
        </div>
            </div>

<div class="group6">
  <div class="group6-sub" style="padding-top:120px">
  <div class="group6-left" style="padding-left:120px">
    <img src="groupp/Rectangle 422.png" style="width: 232px;height: 332px;flex-shrink: 0;">
  </div>
  <div class="group6-right">
    <div class="group6-right-title">Corporate language training for business</div>
    <br>
    <div class="group6-right-description">
      ProTutor corporate training is designed for teams and businesses offering personalized language learning with online tutors. Book a demo to learn more.
  Want your employer to pay for your lessons? Refer your company!
    </div>
    <br>
    <div style="display:flex">
    <button class="joinastutorbutton"><span class="joinastutortext">Join as a Tutor</span></button>
    <button class="joinasstudentbutton" style="margin-left:20px"><span class="joinasstudenttext">Join as a Student</span></button>
  </div>
  </div>

</div>
</div>

<div class="group7">
<div class="group7-sub">
  <div class="group7-heading">
    Find an Online English Teacher to Help You Master English
  </div>
  <div class="group7-flex">
    <div class="group7-flex-left">
      <div class="group7-flex-left-content">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item" >
      <h2 class="accordion-header" style="background-color:white" id="headingOne">
        <button style="background-color:white;color: var(--primary, #FF6C0B);font-feature-settings: 'clig' off, 'liga' off;font-family: Poppins;font-size: 24px;font-style: normal;font-weight: 500;line-height: 30px; /* 125% */" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Is there a free trial available?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="accordion-content">Live tutoring software enables tutors to teach students in real time utilizing interactive video conferencing features. As a Student or Parent, you can browse through Tutor profiles and their subject expertise, and thereafter book live lesson.</div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed accordion-inactive" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Can I change my plan later?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>

<div class="footer">
  <div class="footer-content">
  <div class="footer1" style="margin-right:81px">
  <img src="groupp/image 2.png" style="width: 100px;height: 34px;flex-shrink: 0;">
  <br>
  <div class="footer-head">We take care of your health with regular and fun exercise</div>
  </div>
  <div class="footer1">
  <div class="footer-top-heading">Top Subjects</div>
  <div class="footer-heading-item">
  English
  </div>
  <div class="footer-heading-item">
  German
  </div>
  <div class="footer-heading-item">
  Arabic
  </div>
  <div class="footer-heading-item">
  Spanish
  </div>
</div>

<div class="footer1">
<div class="footer-top-heading">About</div>
<div class="footer-heading-item">
Home
</div>
<div class="footer-heading-item">
Find Tutor
</div>
<div class="footer-heading-item">
Enterprise
</div>
<div class="footer-heading-item">
Become a tutor
</div>
</div>

<div class="footer1">
<div class="footer-top-heading">Help</div>
<div class="footer-heading-item">
About us
</div>
<div class="footer-heading-item">
Cookies Policy
</div>
<div class="footer-heading-item">
Privacy Police
</div>
<div class="footer-heading-item">
Support
</div>
</div>

<div class="footer1">
<div class="footer-top-heading">Contact</div>
<div class="footer-heading-item">
demo@gmail.com
</div>
<div class="footer-heading-item">
+1234567
</div>
</div>
  </div>
  <div class="copyright" style="margin-top:85px;margin-left:562px">
  Copyright © 2023 all right reserved ProTutor
  </div>
</div>

    <br><br>


    <!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Set the number of cards to show at a time
    var cardsToShow = 3;

    // Get the width of each card including margin
    var cardWidth = $('.card').outerWidth(true);

    // Calculate the total width of all cards
    var totalWidth = cardWidth * $('.card').length;

    // Set the container width to fit the cardsToShow
    $('.cards').width(cardWidth * cardsToShow);

    // Get the number of remaining cards to slide
    var remainingCards = $('.card').length - cardsToShow;

    // Check if there are remaining cards
    if (remainingCards > 0) {
      // Show the slideRightButton
      $('.cards-container').addClass('show-button');
    }

    // Handle sliding the cards to the right
    $('#slideRightButton').on('click', function() {
      // Slide the cards by the width of one card
      $('.cards').animate({
        marginLeft: '-=' + cardWidth
      }, 500);

      // Decrease the remainingCards count
      remainingCards--;

      // Check if there are no more remaining cards
      if (remainingCards <= 0) {
        // Hide the slideRightButton
        $('.cards-container').removeClass('show-button');
      }
    });

    $('#slideLeftButton').on('click', function() {
  // Slide the cards back by the width of one card
  $('.cards').animate({
    marginLeft: '+=' + cardWidth
  }, 500, function() {
    // After animation completes, increase the remainingCards count
    remainingCards++;

    // Show the slideRightButton
    $('.cards-container').addClass('show-button');
  });
});

  });


</script>
