<style type = "text/css">
    html{
        scroll-behavior: smooth;
    }
    *{margin: 0; padding: 0; box-sizing: border-box;font-family: 'Roboto', sans-serif;}

    .nav_style{
    background-color: #a29bfe!important;
    }
    .nav_style a{
        color: white;
    }

    /*<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/
.main-header{
    height: 450px;
    width: 100%;
}
.leftside{
    padding-right: 200px;
}
.rightside h1{
    font-size: 3em;
}
.covid_animate img{
    animation: corona 3s linear infinite;
}
@keyframes corona{
    0% {transform: rotate(0);}
    100% {transform: rotate(36deg);}

}
.leftside img{
    animation: unity 5s linear infinite;
}
@keyframes unity{
    0% {transform: scale(0.75);}
    20% {transform: scale(1);}
    40% {transform: scale(0.75);}
    60% {transform: scale(1);}
    80% {transform: scale(0.75);}
    100% {transform: scale(0.75);}

}

/*corona update */

.covid_update{
    margin: 0 0 30px 0;
}
.covid_update h3{
    color: #ff7675;
}
.covid_update h1{
    font-size: 2rem;
    text-align: center;
}
/*........................... */

.sub_section{
    background-color: #fbfafd;
}

.footer_style{
background-color: #a29bfe !important;
}
.footer_style p{
margin-bottom: 0 !important;}

/* top scroll */

#myBtn {
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline:none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBtn:hover{
    background: #606060;
}
</style>
