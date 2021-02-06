<?php
*{
  margin: 0;
  padding: 0;
  font-family: Century Gothic;
}
body{
  overflow-x: hidden;
}




ul{
   float: right;
   list-style-type: none;
   margin-top: 25px;
   margin-right: 2%;
}

ul li{
   display: inline-block;

}

ul li a{
   text-decoration: none;
   font-weight: 600;
   color: blue;
   padding: 5px 40px;
   border: 2px solid black;
}

ul li a:hover{
  background-color: wheat;
  color: red;
  padding: 5px 40px;
  border: 2px solid black;
  transition: 0.6s ease;
}
.logo{
   float:left;
   padding-top: 5%;
   color: crimson;
   margin-top: 5px;
   margin-left: 2%;
   padding: 1% 1% 1% 1%;
}

.logo img{
  float:left;
  width: 60px;
  height:60px;
}


.fa-instagram {
  background: white;
  color: black;
  padding: 10px;
  font-size: 20px;
  width: 15px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
  border: 2px solid black;
  display:inline-block;
  list-style-type:none;
  
}

.fa-facebook {
  background: white;
  color: black;
  padding: 10px;
  font-size: 20px;
  width: 15px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
  border: 2px solid black;
  display:inline-block;
  list-style-type:none;
  
}


.title{
  position: absolute;
  top:30%;
  left:50%;
  transform: translate(-50%,-50%);
  font-size:40px;
  color: whitesmoke;
  text-align: center;
}



.fa{
    display: inline-block;
}

#box1 { 
  flex-grow: 1; 
  background-color: whitesmoke;
  padding-bottom: 2%;
   
} 

#box2 { 
  flex-grow: 1; 
} 

#box3 { 
  flex-grow: 1; 
  background-color: whitesmoke;
  padding-bottom: 2%;
  padding-top: 2%;

}

.column {
  float: left;
  width: 23%;
  height: 100%;
  padding: 0 10px;
}

.column2 {
  float: left;
  width: 23%;
  height: 100%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  background-color: white;
  margin-left: 2%;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: white;
}

.checked {
  color: orange;
}

h2::after   {  
  margin-left: 2.85%;
  background-color: #e79700;  content: "";  display: block;  height: 3px;  width: 5.6%;}

button{
  text-align: center;
  padding: 2% 2% 2% 2%;
  border: 2px solid black;
}

#box2 { 
  flex-grow: 1; 
  background-color: whitesmoke;
  padding-bottom: 2%;
  padding-top: 2%;
  
  } 

  .row1{
    float: left;
width: 23%;
height: 100%;
padding: 0 10px;
}

.row2{
    float: left;
    width: 23%;
    height: 100%;
    padding: 0 10px;
    }

    .card5 {
      padding: 0px 0px;
      background-color: transparent;
      padding-left: 3px;
      padding-top: 0.05px;
      }
  
  .card6 {
          padding: 0px 0px;
          background-color: transparent;
          }
  
          .card7 {
              padding: 0px 0px;
              background-color: transparent;
              padding-left: 3px;
              padding-top: 0.05px;
              color: white;
              }
          
          .card8 {
                  background-color: transparent;
                  padding-left: 3px;
              padding-top: 0.05px;
                  }


                  .row5{
                    float: left;
                width: 29%;
                height: 100%;
                padding: 0 0px;
                padding-left: 4%;
                padding-top: 4%;
                padding-bottom: 4%;
                background-color: transparent;
                }
                
                .row6{
                    float: left;
                    width: 29%;
                    height: 100%;
                    padding: 0 0px;
                    padding-left: 4%;
                    padding-top: 4%;
                    padding-bottom: 4%;
                    background-color: transparent;
                    }
                
                
                    .row8{
                        float: left;
                        width: 29%;
                        height: 100%;
                        padding: 0 0px;
                        padding-left: 4%;
                        padding-top: 4%;
                        padding-bottom: 4%;
                        background-color: transparent;
                        }

                        #box3 { 
                          flex-grow: 1; 
                          background-color: darkblue;
                          padding-bottom: 2%;
                          padding-top: 2%;
                          
                          } 

                          .arrow {
                            border: solid yellow;
                            border-width: 0 3px 3px 0;
                            display: inline-block;
                            padding: 3px;
                          }
                          
                          .right {
                            transform: rotate(-45deg);
                            -webkit-transform: rotate(-45deg);
                          }

                          .verticalLine {
                            border-left: thick solid #ff0000;
                          }

                          ?>