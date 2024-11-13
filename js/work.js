const getIllustrations = () => { // convert o async function late
    let illustrations = '';
    return (fetch('media/illustrations.json')
        .then(response => response.json()) //returns an object not json
            .then(array => {
                array.forEach((illustration) => {
                    console.log(illustration);
                    illustrations += `<div class="img-container m-5"> 
                            <img src="${illustration}"></div>`
                })
                return illustrations;
            }).catch(err => console.error(`Error: ${err}`)));
};

function displayWork(type) {
    let workContainer = document.getElementById('work');
    let workNav = document.getElementsByClassName('work-nav')[0];
    
    let graphics = `<div class="row vw-100 overflow-">
                <div class="col d-flex justify-content-end">
                    <div class="img-container ">
                    <img src="media/evolve.png">
                    </div>
                </div>
                <div class="col line">
                    <h4><i>infographic</i></h4>
                    <h1>A.C.R.E.S's Acres of Successes </h1>
                    <p> BRIEF: Agriculture for Community Restoration Economic Justice & Sustainability(A.C.R.E.S.) needed a fun bright infographic encompassing their past acheivements to feature at a fundraiser. 
                    </p>
                </div>		
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <div class="img-container ">
                    <img src="media/qwocmap.gif" alt="">
                    </div>
                </div>
                <div class="col line">
                    <h4><i>infographic</i></h4>
                    <h1>Mapping a Journey with QWOCMAP</h1>
                    <p>BRIEF: Queer Women of Color Media Art Project(QWOCMAP) needed a visually pleasing infographic to showcase their impact in a report to donors.</p>
                </div>
        </div>`; 

    switch (type) {
        case 'graphics':
            workContainer.innerHTML = graphics;
            break;
        case 'illustrations':
            getIllustrations()                  // this returns a promise...
            .then((illustrations) => {       // `illustrations` is the value resolved by the promise...
                workContainer.innerHTML = `<div id="illustrations" class="row d-flex flex-row flex-nowrap vh-100 overflow-scroll">${illustrations}
                </div>`     
            });
            break;
        default:
            alert('No works in this category yet.');
    }

    workNav.scrollIntoView(true);
}

function noWebWork(){
    let workContainer = document.getElementById('work');
    let workNav = document.getElementsByClassName('work-nav')[0];

    let alert = `<div class="d-flex justify-content-center"><div id="alert" class="d-block m-5"><p class="m-4">Web work in progress. Take a look at my GitHub respository. </p>
			<a href="https://github.com/kelsey-d?tab=repositories" target="_blank" class="mb-4">SEE RESPOSITORY</a>
		</div></div>`;
    workContainer.innerHTML = alert; 
    workNav.scrollIntoView(true);

}