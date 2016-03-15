/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function victimaMinaMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("victimaMinaSi").style.display = "";
      }else
      {
          document.getElementById("victimaMinaSi").style.display = "none";          
      }
}

function afiliadoSaludMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("afiliadoSaludSi").style.display = "";
      }else
      {
          document.getElementById("afiliadoSaludSi").style.display = "none";          
      }
}

function regimenMostrarSi(get) {
      if (get.value=="Ninguno" || get.value=="")
      {
          document.getElementById("cualRegimenSi").style.display = "none";
      }else
      {
          document.getElementById("cualRegimenSi").style.display = "";                    
      }
}

function vacunasMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("cualesVacunasSi").style.display = "";
      }else
      {
          document.getElementById("cualesVacunasSi").style.display = "none";          
      }
}

function enfCronicaMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("cualEnfCronicasSi").style.display = "";
      }else
      {
          document.getElementById("cualEnfCronicasSi").style.display = "none";          
      }
}

function estudiaAMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("estudiaASi").style.display = "";
      }else 
      {
          document.getElementById("estudiaASi").style.display = "none";          
      }
}

function victimizadoMostrarSi(get) {
      if (get.value=="1")
      {
          document.getElementById("victimizado1").style.display = "";
          document.getElementById("infVictimizacion").style.display = "";
          document.getElementById("victimizado2").style.display = "none";
          document.getElementById("victimizado3").style.display = "none";
      }else if (get.value=="2") 
      {
            document.getElementById("victimizado2").style.display = "";
            document.getElementById("infVictimizacion").style.display = ""; 
            document.getElementById("victimizado1").style.display = "none";
            document.getElementById("victimizado3").style.display = "none";
      }else if (get.value=="3")
      {
            document.getElementById("victimizado3").style.display = "";
            document.getElementById("infVictimizacion").style.display = ""; 
            document.getElementById("victimizado1").style.display = "none";
            document.getElementById("victimizado2").style.display = "none";
      }else
      {
          document.getElementById("victimizado1").style.display = "none";
          document.getElementById("victimizado2").style.display = "none";
          document.getElementById("victimizado3").style.display = "none";
          document.getElementById("infVictimizacion").style.display = "none";
      }
}
