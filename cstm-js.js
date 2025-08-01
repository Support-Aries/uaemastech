// past speaker dynamic js

// data
const speakersData = [
  {
    imgSrc: "assets/esol/images/previous-speakers/1.jpg",
    name: "Linh Austin",
    designation: "Senior Vice President<br>Middle East and North Africa, McDermott",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/18.jpg",
    name: "Twan Voogt",
    designation: "Senior Advisor Semi-Submersible Heavy Lift Transportation<br>United Heavy Lift",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/2.jpg",
    name: "Vivek Seth",
    designation: "Managing Director<br>Arga Energy",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/3.jpg",
    name: "Dr. M. Abdul Rahim",
    designation: "Regional Manager<br>South Asia, ClassNK",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/4.jpg",
    name: "Liro Lindborg",
    designation: "Vice President - Remote and Autonomous Operations<br>Rolls-Royce",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/5.jpg",
    name: "David L Guymon",
    designation: "Manager of Mechanical Engineering<br>Marine Assets and Operations",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/6.jpg",
    name: "Ravi K",
    designation: "Vice President - Strategy<br>KAM & Sales Ops, Asia Pacific & ME, Rolls-Royce",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/8.jpg",
    name: "Deepthi Sewraz",
    designation: "Senior Consultant- Maritime<br>South East Europe& Middle East,DNVGL Maritime",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/9.jpg",
    name: "Klaus Vanska",
    designation: "Global Business Development Manager<br>ABB",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/10.jpg",
    name: "Melvin Mathews",
    designation: "Director New Business<br>Wartsila",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/12.jpg",
    name: "Ashik Subahani",
    designation: "Managing Director<br>Greatwaters Maritime",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/13.jpg",
    name: "Jagbir Singh Ghotra",
    designation: "Manager - Rigs Division<br>Dry Docks World",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/14.jpg",
    name: "Capt. Ronald Mc Guire",
    designation: "Rig Operations Consultant<br>Seafox",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/15.jpg",
    name: "Unnikrishnan Nair",
    designation: "Manager<br>ABS",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/16.jpg",
    name: "George Jacob",
    designation: "Vice President Technical<br>Lamprell",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/17.jpg",
    name: "Mohsen Abdelalim",
    designation: "General Manager<br>Keppel",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/21.jpg",
    name: "Cyril Varghese",
    designation: "Global Logistics Director<br>Strategy and Commercial, Fluor Corporation",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/19.jpg",
    name: "Alfonso Hernandez",
    designation: "Global Development Director<br>Coordinadora",
  },
  {
    imgSrc: "assets/esol/images/previous-speakers/20.jpg",
    name: "Paul Konst",
    designation: "CEO<br>Rolldock Shipping",
  },
  // Add more objects as needed
];
//  end data

//  dynamic slider js codde

const carouselContainer = document.querySelector(".owl-carousel.pastSpeakers");

speakersData.forEach((speaker) => {
  const item = document.createElement("div");
  item.classList.add("item", "previousSpeakerMob");

  item.innerHTML = `
        <div class="speakers-gallery-item">
            <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                <img class="rounded" src="${speaker.imgSrc}" alt="Gallery Image">
            </div>
            <div class="item-content pt-2">
                <h3 class="title cstmPreviousSpeakerName">${speaker.name}</h3>
                <span class="sub">${speaker.designation}</span>
            </div>
        </div>
    `;

  carouselContainer.appendChild(item);
});
// end dynamic slider js codde

//   end past speaker dynamic js

// Hamberg menu closing
// Select all nav-link elements inside the offcanvas menu
// Select all anchor tags within the offcanvas
// document.querySelectorAll(".offcanvas .nav-link").forEach((link) => {
//   link.addEventListener("click", () => {
//     // Get the offcanvas element
//     const offcanvasElement = document.getElementById("offcanvasExample");
//     // Remove the 'show' class to hide the offcanvas
//     offcanvasElement.classList.remove("show");

//     // Remove the 'show' class from the backdrop
//     const backdropElement = document.querySelector(".offcanvas-backdrop");
//     if (backdropElement) {
//       backdropElement.classList.remove("show");
//       backdropElement.remove(); // Remove the backdrop from the DOM
//     }

//     // Also remove the 'aria-hidden' attribute and set 'aria-expanded' to false for accessibility
//     offcanvasElement.setAttribute("aria-hidden", "true");
//     offcanvasElement.setAttribute("aria-expanded", "false");
//   });
// });


