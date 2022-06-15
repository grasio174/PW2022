<?php
include 'Database.php';
$user = $_COOKIE['User'];
$resultq=mysqli_query($db, "select * from produk");
$rowcount=mysqli_num_rows($resultq);

echo '<script>
let produk = [];
let b =[];
</script>';

while ($result = mysqli_fetch_assoc($resultq)){
echo '<script>
produk.push(["'.$result['Foto'].'","'.$result['Nama_Produk'].'", "'.$result['Harga'].'", "'.$result['Tinggi'].'", "'.$result['Tenaga'].'", "'.$result['Berat'].'", "'.$result['Mesin'].'"]);
</script>';
}

echo '<script>

function destroy(){
    for (var i = 0; i < produk.length + 20; i++){
        var olddata=document.getElementById("el"+i).lastChild;
        document.getElementById("swip").removeChild(olddata);
        document.getElementById("swipview").removeChild(olddata);
        }
}

function Remove() {
  for (var i = 0; i < produk.length; i++){
    dup = document.getElementById(i);
    if (dup != null ){
        dup.remove();
    }
  }
}
  


function thousands_separators(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }

function addElementSwip() {
      Remove();
      if (b != ""){
      for (var i = 0; i < b.length; i++){
      const divswip = document.createElement("div");
      divswip.id=i;
      const img = document.createElement("img");
      img.src = b[i][0];
      const divcon = document.createElement("div");
      const h3 = document.createElement("h3");
      h3.setAttribute("name", "Nama_Produk");
      const content = document.createTextNode(b[i][1]);
      const divprice = document.createElement("div");
      const spanprice = document.createElement("span")
      let price = ("Rp. " + thousands_separators(b[i][2]) );
      const para = document.createElement("p");
    
      const span1 = document.createElement("span");
      span1.className="fas fa-circle";
      let tinggi = b[i][3] + " (Tinggi)";
      const span2 = document.createElement("span");
      span2.className="fas fa-circle";
      let tenaga = b[i][4] + " (Tenaga)";
      const span3 = document.createElement("span");
      span3.className="fas fa-circle";
      let berat = b[i][5] + " (Berat)";
      const span4 = document.createElement("span");
      span4.className="fas fa-circle";
      let mesin = b[i][6] + " (Mesin)";
    
      para.appendChild(span1);
      span1.insertAdjacentText("afterend" ,tinggi);
      para.appendChild(span2);
      span2.insertAdjacentText("afterend" ,tenaga);
      para.appendChild(span3);
      span3.insertAdjacentText("afterend" ,berat);
      para.appendChild(span4);
      span4.insertAdjacentText("afterend" ,mesin);
    
     
      divprice.appendChild(spanprice);
      spanprice.insertAdjacentText("afterend" ,price);
      divprice.classList.add("price");
      h3.appendChild(content);
      divcon.appendChild(h3);
      divcon.appendChild(divprice);
      divcon.appendChild(para);
      divcon.classList.add("content");
      
      const but = document.createElement("a");
      const butcon = document.createTextNode("Check Out");
      const button = document.createElement("button");
      button.appendChild(butcon);
      button.setAttribute("type", "button");
      button.className = "btn";
      but.setAttribute("href", "Pemesanan.php?produk=" + b[i][1]);
      but.appendChild(button);
      divcon.appendChild(but);
      divswip.appendChild(img);
      divswip.appendChild(divcon);
  
      divswip.className ="swiper-slide box";
      divswip.setAttribute("role", "group");
      divswip.setAttribute("aria-label", (i+1)+ " / "+ (b.length));
      divswip.setAttribute("style", "width: 426px; margin-right: 20px;");
      divswip.setAttribute("data-swiper-slide-index", i);
      element = document.getElementById("swip");
      element.appendChild(divswip);
      }
    }
  }
  
  //item grid view
  function addElementGrid() { 
        Remove();
      if (b != ""){
      for (var i = 0; i < b.length; i++){
      const divswip = document.createElement("div");
      const img = document.createElement("img");
      divswip.id=i;
      img.src = b[i][0];
      const divcon = document.createElement("div");
      const h3 = document.createElement("h3");
      h3.setAttribute("name", "Nama_Produk");
      const content = document.createTextNode(b[i][1]);
      const divprice = document.createElement("div");
      const spanprice = document.createElement("span")
      let price = ("Rp. " + thousands_separators(b[i][2]) );
      
      divprice.appendChild(spanprice);
      spanprice.insertAdjacentText("afterend" ,price);
      divprice.classList.add("price");
      h3.appendChild(content);
      divcon.appendChild(h3);
      divcon.appendChild(divprice);
      divcon.classList.add("content");
    
      const but = document.createElement("a");
      const butcon = document.createTextNode("Check Out");
      const button = document.createElement("button");
      button.appendChild(butcon);
      button.setAttribute("type", "button");
      button.className = "btn";
      but.setAttribute("href", "Pemesanan.php?produk=" + b[i][1]);
      but.appendChild(button);
      divcon.appendChild(but);
      divswip.appendChild(img);
      divswip.appendChild(divcon);
      
      
      divswip.className ="swiper-slide box";
      divswip.setAttribute("role", "group");
      divswip.setAttribute("aria-label", (i+1)+ " / "+ (b.length));
      divswip.setAttribute("style", "width: 426px; margin-right: 20px;");
      divswip.setAttribute("data-swiper-slide-index", i);
      element = document.getElementById("swipview");
      element.appendChild(divswip);
      }
    }
  }
  
  function swip() {
    harga();
    addElementSwip();
  }
  
  function grid() {
    harga();
    addElementGrid();
  }

  //harga item filter
  function harga(){
    b = [] ;
    low = document.getElementById("terendah").value;
    high = document.getElementById("tertinggi").value;
    if(low != "" && high == ""){ 
      for (var i = 0; i < produk.length; i++){
        if (produk[i][2] >= low){
        b.push(produk[i]);
        }
      }
    }
    else if(low == "" && high == ""){    
    b = produk;
    }
    else if(low == "" && high != ""){   
      for (var i = 0; i < produk.length; i++){
        if (produk[i][2] <= high ){
          b.push(produk[i]);
        }
      }
    }
    else if(low != "" && high != ""){    
      for (var i = 0; i < produk.length; i++){
        if (produk[i][2] <= high && produk[i][2] >= low){
          b.push(produk[i]);
        }
      }
    }
  }
  
</script>';
?>