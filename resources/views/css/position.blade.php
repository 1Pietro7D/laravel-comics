<style>
.relative {
  position: relative;
}
.absolute {
  position: absolute;
}
.fixed {
  position: fixed;
}

.right {
  right: 0;
}
.top {
  top: 0;
}
.left {
  left: 0;
}
.bottom {
  bottom: 0;
}

.relative-center {
  $size: 50%;
  position: relative;
  top: $size;
  left: $size;
  transform: translate(-$size, -$size);
}
.relativeY-center {
  $size: 50%;
  position: relative;
  top: $size;
  transform: translateY(-$size);
}
.relativeX-center {
  $size: 50%;
  position: relative;
  left: $size;
  transform: translateX(-$size);
}
.absolute-0 {
  position: absolute;
  top: 0;
  left: 0;
}
.absolute-center {
  /* always into relative container !! */
  $size: 50%;
  position: absolute;
  top: $size;
  left: $size;
  transform: translate(-$size, -$size);
}
.absoluteY-center {
  /* always into relative container !! */
  $size: 50%;
  position: absolute;
  top: $size;

  transform: translateY(-$size);
}
.absoluteX-center {
  /* always into relative container !! */
  $size: 50%;
  position: absolute;
  left: $size;
  transform: translateX(-$size);
}

</style>
