@extends('frontend.layouts.app')


@section('content')
<style>
.content-center{
    color: white;
    /* width: 100%; */
}
.container-R7{
    background-color: #212129;
    display: flex;
    position: relative;
    height: 150px;
    padding-top: 30px;
    justify-content: center;
}
.container-R8{
   padding-bottom: 40px;
}
.content-p2{
    color: white;
    margin: 0px;
}
.content-p3{
    color: white;
    padding-left: 25px;
}
.column{
    border-right: 1px solid;
    color: white;
    padding-right: 20px;
    margin-bottom: 26px
}
.content-h1{
    text-align: center;
    justify-content: center;
    color: grey;
}
.images-set1{
    display: flex;
    justify-content: center;
    /* padding: 50px; */
    align-items: center;
    /* position: relative; */
}

.Paragraph-1{
    text-align: center;
    justify-content: center;
}
.paragraph-2{
    margin: 0px;
}
.image-set3{
    margin-top: 21px;
    /* padding-left: 10px; */
}
.demo{
    height: 200px;
    width: 29.5%;
    /* position: absolute; */
    /* background-color: aqua; */
    padding-bottom: 10px;
    background-color:white;

}
.imgDiv , .image-set2{
    margin-left: 10px;
    /* margin-right: 10px; */
}
.demoImage{
    width: 100%;
    height: 80%;
    background-position: center;
    background-image: url('https://img.freepik.com/free-photo/young-handsome-man-choosing-clothes-shop_1303-19720.jpg');
}
.demoImage2{
    width: 100%;
    height: 80%;
    background-position: center;
    background-image: url('https://media.cntraveller.in/wp-content/uploads/2017/03/Kaleelead.jpg');
    background-size: cover;
}
.demoImage3{
    width: 100%;
    height: 80%;
    background-position: center;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcn3joQzd0J9xrNij2osVcfnBoz68-0vcIPg&usqp=CAU');
    background-size: cover;
}

.demoImage4{
     width: 100%;
    height: 80%;
    background-position: center;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX8kGM5jy04ZIOr5FLyCLyj5-grLFCKDH1Aw&usqp=CAU');
    background-size: cover;
}
.demoImage5{
    width: 100%;
    height: 80%;
    background-position: center;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRKi8QyM8iDATJKYiAbcJczN5vsOA5VZV5Sg&usqp=CAU');
    background-size: cover;
}
.demoImage6{
    width: 100%;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFm-Q5vxqNWI0FH37RqwkGn3RZAhtKPXit-g&usqp=CAU');
    height: 80%;
    background-position: center;
    background-size: cover;
}


</style>
<div class="container-R7">
        <div class="column">
            <p class="content-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eum architecto
                possimus<br>Lorem ipsum dolor sit amet.</p>
            <p class="content-p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eum architecto
                possimus<br>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="content-p3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eum architecto possimus<br>Lorem ipsum dolor
                sit amet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eum architecto possimus<br>Lorem ipsum dolor
                sit amet.</p>
        </div>
    </div>

    <div class="container-R8">
        <hr style="width: 80%; margin-top: 20px;">
        <div class="content-h1">
            <h2>ASSORTED LOTS FROM DEPARTMENT STORES</h2>
        </div>
        <div class="images-set1">
            <div class="imgDiv demo text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                <div class="demoImage"></div>
                <!-- <img src="https://img.freepik.com/free-photo/young-handsome-man-choosing-clothes-shop_1303-19720.jpg" style="width: 60%;" alt=""> -->
                <div class="Paragraph-1">
                    <p class="paragraph-2">Men's Clothing</p>
                    <p class="paragraph-2">Department Stores Assorted Lots</p>
                </div>
            </div>
            <div class="image-set2 demo text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                <div class="demoImage2"></div>
                <!-- <img src="https://media.cntraveller.in/wp-content/uploads/2017/03/Kaleelead-400x400.jpg" alt=""> -->
                <div class="Paragraph-1">
                    <p class="paragraph-2">Women’s Clothing</p>
                    <p class="paragraph-2">Department Stores Assorted Lots</p>
                </div>
            </div>
            <div class="image-set2 demo text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                <div class="demoImage3"></div>
                <!-- <img src="https://cdn-dddpf.nitrocdn.com/xXwilgHGUeGZPqqzSBGkQnpaLKsUKUDy/assets/images/optimized/rev-72b643a/wp-content/uploads/2022/11/Childrens-Clothing-Lots.webp" alt=""> -->
                <div class="Paragraph-1">
                    <p class="paragraph-2">Children’s Clothing</p>
                    <p class="paragraph-2">Department Stores Assorted Lots</p>
                </div>
            </div>
        </div>
        <div class="images-set1" style="margin-top: 20px">
            <div class="imgDiv demo text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                <div class="demoImage4"></div>
                <!-- <img src="https://img.freepik.com/free-photo/young-handsome-man-choosing-clothes-shop_1303-19720.jpg" style="width: 60%;" alt=""> -->
                <div class="Paragraph-1">
                    <p class="paragraph-2">Men's Clothing</p>
                    <p class="paragraph-2">Department Stores Assorted Lots</p>
                </div>
            </div>
            <div class="image-set2 demo text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                <div class="demoImage5"></div>
                <!-- <img src="https://media.cntraveller.in/wp-content/uploads/2017/03/Kaleelead-400x400.jpg" alt=""> -->
                <div class="Paragraph-1">
                    <p class="paragraph-2">Women’s Clothing</p>
                    <p class="paragraph-2">Department Stores Assorted Lots</p>
                </div>
            </div>
            <div class="image-set2 demo text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                <div class="demoImage6"></div>
                <!-- <img src="https://cdn-dddpf.nitrocdn.com/xXwilgHGUeGZPqqzSBGkQnpaLKsUKUDy/assets/images/optimized/rev-72b643a/wp-content/uploads/2022/11/Childrens-Clothing-Lots.webp" alt=""> -->
                <div class="Paragraph-1">
                    <p class="paragraph-2">Children’s Clothing</p>
                    <p class="paragraph-2">Department Stores Assorted Lots</p>
                </div>
            </div>
        </div>

        
    </div>

@endsection    


@section('script')
    <script>

    let myHover3D = new Hover3D(".demo"); // Yep! That's it.

    // X-axis offset
myHover3D.xOffset = 10;
// Y-axis offset
myHover3D.yOffset = 10;
// Attack. How fast the element reacts to cursor movement
myHover3D.attack = 0.1;
// Release. How fast the element repairs its initial state when your cursor leaves it
myHover3D.release = 0.5;
// Sets the distance between the user and the z=0 plane
myHover3D.perspective = 500;

    </script>

@endsection    