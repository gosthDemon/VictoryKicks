<div class="views">
    <div class="show">
        <div class="show-tittle"></div>
        <div class="qr-image"></div>
        <div class="image"></div>

    </div>
    <div class="card-kick">
        <div class="left"></div>
        <div class="right"></div>
    </div>
</div>
<style>
    .card-kick{
  width: 300px;
  height: 120px;
  position: relative;
  overflow: hidden;
}

.left {
  width: 200px;
  height: 300px;
  background-color: red;
  position: absolute;
  left: -50px;
  top: 0;
  transform-origin: right center;
  transform: rotate(20deg);
}

.right {
  width: 300px;
  height: 300px;
  background-color: blue;
  position: absolute;
  left: 80px;
  top: -30px;
  transform: translate(-50%,-50%)
  transform-origin: left center;
  transform: rotate(20deg);
}

</style>
