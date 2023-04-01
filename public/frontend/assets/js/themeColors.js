const handleThemeUpdate = (cssVars) => {
    const root = document.querySelector(':root');
    const keys = Object.keys(cssVars);
    keys.forEach(key => {
        root.style.setProperty(key, cssVars[key]);
    });
}

function dynamicPrimaryColor(primaryColor) {
    primaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
            const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
            const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
            const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
            handleThemeUpdate({
                [cssPropName]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName1]: e.target.value + 95,
                [cssPropName2]: e.target.value,
                [cssPropName7]: e.target.value + 20,
            });
        });
    });
}

function dynamicSecondaryColor(secondaryColor) {
    secondaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName11 = `--secondary-${e.target.getAttribute('data-id5')}`;
            const cssPropName12 = `--secondary-${e.target.getAttribute('data-id6')}`;
            const cssPropName13 = `--secondary-${e.target.getAttribute('data-id8')}`;
            handleThemeUpdate({
                [cssPropName11]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName12]: e.target.value + 95,
                [cssPropName13]: e.target.value + 20,
            });
        });
    });
}

function dynamicDarkPrimaryColor(darkprimaryColor) {
    darkprimaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
            const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
            const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
            const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
            handleThemeUpdate({
                [cssPropName]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName1]: e.target.value + 95,
                [cssPropName2]: e.target.value,
                [cssPropName7]: e.target.value + 20,
            });
        });
    });
}

function dynamicDarkSecondaryColor(darksecondaryColor) {
    darksecondaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName11 = `--secondary-${e.target.getAttribute('data-id5')}`;
            const cssPropName12 = `--secondary-${e.target.getAttribute('data-id6')}`;
            const cssPropName13 = `--secondary-${e.target.getAttribute('data-id8')}`;
            handleThemeUpdate({
                [cssPropName11]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName12]: e.target.value + 95,
                [cssPropName13]: e.target.value + 20,
            });
        });
    });
}

function dynamicTransPrimaryColor(transprimaryColor) {
    transprimaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
            const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
            const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
            const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
            handleThemeUpdate({
                [cssPropName]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName1]: e.target.value + 95,
                [cssPropName2]: e.target.value,
                [cssPropName7]: e.target.value + 20,
            });
        });
    });
}

function dynamicTransSecondaryColor(transsecondaryColor) {
    transsecondaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName11 = `--secondary-${e.target.getAttribute('data-id5')}`;
            const cssPropName12 = `--secondary-${e.target.getAttribute('data-id6')}`;
            const cssPropName13 = `--secondary-${e.target.getAttribute('data-id8')}`;
            handleThemeUpdate({
                [cssPropName11]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName12]: e.target.value + 95,
                [cssPropName13]: e.target.value + 20,
            });
        });
    });
}

function dynamicTransBackgroundColor(transbackgroundColor) {
    transbackgroundColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName12 = `--transparent-${e.target.getAttribute('data-id9')}`; 
            handleThemeUpdate({
                [cssPropName12]: e.target.value,
            });
        });
    });
}

function dynamicTransBackgroundColor2(transbackgroundColor2) {
    transbackgroundColor2.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName13 = `--transparent-${e.target.getAttribute('data-id10')}`; 
            handleThemeUpdate({
                [cssPropName13]: e.target.value,
            });
        });
    });
}


(function() {
    // Light theme color picker
    // const LightThemeSwitchers = document.querySelectorAll('.light-mode .switch_section span');
    const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
    const dynamicSecondaryLight = document.querySelectorAll('input.color-secondary-light');
    const dynamicPrimaryDarkColor = document.querySelectorAll('input.color-primary-dark');
    const dynamicSecondaryDark = document.querySelectorAll('input.color-secondary-dark');
    const dynamicPrimaryTransColor = document.querySelectorAll('input.color-primary-Transparent');
    const dynamicSecondaryTrans = document.querySelectorAll('input.color-secondary-Transparent');
    const dynamicBackgroundTrans = document.querySelectorAll('input.bg-primary-Transparent');
    const dynamicBackgroundTrans2 = document.querySelectorAll('input.bg-primary-Transparent2');

    // themeSwitch(LightThemeSwitchers);
    dynamicPrimaryColor(dynamicPrimaryLight);
    dynamicSecondaryColor(dynamicSecondaryLight);
    dynamicDarkPrimaryColor(dynamicPrimaryDarkColor);
    dynamicDarkSecondaryColor(dynamicSecondaryDark);
    dynamicTransPrimaryColor(dynamicPrimaryTransColor);
    dynamicTransSecondaryColor(dynamicSecondaryTrans);
    dynamicTransBackgroundColor(dynamicBackgroundTrans);
    dynamicTransBackgroundColor2(dynamicBackgroundTrans2);

    localStorageBackup();
    
})();

function localStorageBackup() {
    // if there is a value stored, update color picker and background color
    // Used to retrive the data from local storage
    if (localStorage.primaryColor) {
        // document.getElementById('colorID').value = localStorage.primaryColor;
        document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.primaryColor);
        document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.primaryHoverColor);
        document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.primaryBorderColor);
        document.querySelector('html').style.setProperty('--primary-bg-transparentcolor', localStorage.primaryTransparent);
        document.querySelector('body').classList.remove('dark-mode');
        document.querySelector('body').classList.add('light-mode');
        document.querySelector('body').classList.remove('transparent-mode');

        $('#myonoffswitch1').prop('checked', true);


    }
    if (localStorage.secondaryColor) {
        // document.getElementById('colorID2').value = localStorage.secondaryColor;
        document.querySelector('html').style.setProperty('--secondary-color', localStorage.secondaryColor);
        document.querySelector('html').style.setProperty('--secondary-hover', localStorage.secondaryHoverColor);
        document.querySelector('html').style.setProperty('--secondary-transparent', localStorage.secondaryTransparentColor);
        document.querySelector('body').classList.remove('dark-mode');
        document.querySelector('body').classList.add('light-mode');
        document.querySelector('body').classList.remove('transparent-mode');

        $('#myonoffswitch1').prop('checked', true);


    }

    if (localStorage.darkPrimary) {
        // document.getElementById('darkPrimaryColorID').value = localStorage.darkPrimary;
        document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.darkPrimary);
        document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.primaryHoverColor);
        document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.primaryBorderColor);
        document.querySelector('html').style.setProperty('--primary-bg-transparentcolor', localStorage.primaryTransparent);
        document.querySelector('body').classList.add('dark-mode');
        document.querySelector('body').classList.remove('light-mode');
        document.querySelector('body').classList.remove('transparent-mode');

        $('#myonoffswitch2').prop('checked', true);

    }
    if (localStorage.darksecondary) {
        // document.getElementById('darkColorID2').value = localStorage.darksecondary;
        document.querySelector('html').style.setProperty('--secondary-color', localStorage.darksecondary);
        document.querySelector('html').style.setProperty('--secondary-hover', localStorage.secondaryHoverColor);
        document.querySelector('html').style.setProperty('--secondary-transparent', localStorage.secondaryTransparentColor);
        document.querySelector('body').classList.add('dark-mode');
        document.querySelector('body').classList.remove('light-mode');
        document.querySelector('body').classList.remove('transparent-mode');

        $('#myonoffswitch2').prop('checked', true);

    }
    if (localStorage.transparentPrimary) {
        // document.getElementById('TransparentPrimaryColorID').value = localStorage.transparentPrimary;
        document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.transparentPrimary);
        document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.primaryHoverColor);
        document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.primaryBorderColor);
        document.querySelector('html').style.setProperty('--primary-bg-transparentcolor', localStorage.primaryTransparent);
        document.querySelector('body').classList.remove('dark-mode');
        document.querySelector('body').classList.remove('light-mode');
        document.querySelector('body').classList.add('transparent-mode');

        $('#myonoffswitch3').prop('checked', true);

    }
    if (localStorage.transparentsecondary) {
        // document.getElementById('TransparentColorID2').value = localStorage.transparentsecondary;
        document.querySelector('html').style.setProperty('--secondary-color', localStorage.transparentsecondary);
        document.querySelector('html').style.setProperty('--secondary-hover', localStorage.secondaryHoverColor);
        document.querySelector('html').style.setProperty('--secondary-transparent', localStorage.secondaryTransparentColor);
        document.querySelector('body').classList.remove('dark-mode');
        document.querySelector('body').classList.remove('light-mode');
        document.querySelector('body').classList.add('transparent-mode');

        $('#myonoffswitch3').prop('checked', true);

    }
    if (localStorage.transparentcolor) {
        // document.getElementById('TransparentPrimaryColorID3').value = localStorage.transparentcolor;
        document.querySelector('html').style.setProperty('--transparent-color', localStorage.transparentcolor);
        document.querySelector('body').classList.remove('dark-mode');
        document.querySelector('body').classList.remove('light-mode');
        document.querySelector('body').classList.add('transparent-mode');

        $('#myonoffswitch3').prop('checked', true);

    }
    if (localStorage.transparentcolor2) {
        // document.getElementById('TransparentColorID4').value = localStorage.transparentcolor2;
        document.querySelector('html').style.setProperty('--transparent-color2', localStorage.transparentcolor2);
        document.querySelector('body').classList.remove('dark-mode');
        document.querySelector('body').classList.remove('light-mode');
        document.querySelector('body').classList.add('transparent-mode');

        $('#myonoffswitch3').prop('checked', true);

    }

    if(localStorage.reallistrtl){
        document.querySelector('body').classList.add('rtl');
        $('#myonoffswitch24').prop('checked', true);
    }

    if(localStorage.reallistlightMode){
        document.querySelector('body')?.classList.add('light-mode');
		document.querySelector('body')?.classList.remove('dark-mode');
		document.querySelector('body')?.classList.remove('transparent-mode');
        $('#myonoffswitch1').prop('checked', true);
    }
    if(localStorage.reallistdarkMode){
        document.querySelector('body')?.classList.remove('light-mode');
		document.querySelector('body')?.classList.add('dark-mode');
		document.querySelector('body')?.classList.remove('transparent-mode');
        $('#myonoffswitch2').prop('checked', true);
    }
    if(localStorage.reallisttransparentMode){
        document.querySelector('body')?.classList.remove('light-mode');
		document.querySelector('body')?.classList.remove('dark-mode');
		document.querySelector('body')?.classList.add('transparent-mode');
        $('#myonoffswitch3').prop('checked', true);
    }


}

// triggers on changing the color picker
function changePrimaryColor() {

    var userColor = document.getElementById('colorID').value;
    localStorage.setItem('primaryColor', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('primaryHoverColor', userColor + 95);
    localStorage.setItem('primaryBorderColor', userColor);
    localStorage.setItem('primaryTransparent', userColor + 20);

    // removing dark theme properties
    localStorage.removeItem('darkPrimary')
    localStorage.removeItem('darksecondary')
    localStorage.removeItem('transparentPrimary')
    localStorage.removeItem('transparentsecondary')
    localStorage.removeItem('transparentcolor2')
    document.querySelector('body').classList.add('light-mode');
    document.querySelector('body').classList.remove('dark-mode');
    document.querySelector('body').classList.remove('transparent-mode');

    $('#myonoffswitch1').prop('checked', true);
    names()

    localStorage.setItem('reallistlightMode', true);
    localStorage.removeItem('reallistdarkMode');
    localStorage.removeItem('reallisttransparentMode');
}
function changeSecondaryColor() {

    var userColor = document.getElementById('colorID2').value;
    localStorage.setItem('secondaryColor', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('secondaryHoverColor', userColor + 95);
    localStorage.setItem('secondaryTransparentColor', userColor + 20);

    // removing dark theme properties
    localStorage.removeItem('darkPrimary')
    localStorage.removeItem('darksecondary')
    localStorage.removeItem('transparentPrimary')
    localStorage.removeItem('transparentsecondary')
    localStorage.removeItem('transparentcolor2')
    document.querySelector('body').classList.add('light-mode');
    document.querySelector('body').classList.remove('dark-mode');
    document.querySelector('body').classList.remove('transparent-mode');

    $('#myonoffswitch1').prop('checked', true);
    names()

    localStorage.setItem('reallistlightMode', true);
    localStorage.removeItem('reallistdarkMode');
    localStorage.removeItem('reallisttransparentMode');
}

function darkPrimaryColor() {

    var userColor = document.getElementById('darkPrimaryColorID').value;
    localStorage.setItem('darkPrimary', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('primaryHoverColor', userColor + 95);
    localStorage.setItem('primaryBorderColor', userColor);
    localStorage.setItem('primaryTransparent', userColor + 20);

    // removing light theme data 
    localStorage.removeItem('primaryColor')
    localStorage.removeItem('secondaryColor')
    localStorage.removeItem('transparentPrimary')
    localStorage.removeItem('transparentsecondary')
    localStorage.removeItem('transparentcolor2')

    document.querySelector('body').classList.add('dark-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.remove('transparent-mode');

    $('#myonoffswitch2').prop('checked', true);
    names()

    localStorage.setItem('reallistdarkMode', true);
    localStorage.removeItem('reallistlightMode');
    localStorage.removeItem('reallisttransparentMode');
}

function changeDarkSecondaryColor() {

    var userColor = document.getElementById('darkColorID2').value;
    localStorage.setItem('darksecondary', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('secondaryHoverColor', userColor + 95);
    localStorage.setItem('secondaryTransparentColor', userColor + 20);

    // removing light theme data 
    localStorage.removeItem('primaryColor')
    localStorage.removeItem('secondaryColor')
    localStorage.removeItem('transparentPrimary')
    localStorage.removeItem('transparentsecondary')
    localStorage.removeItem('transparentcolor2')

    document.querySelector('body').classList.add('dark-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.remove('transparent-mode');

    $('#myonoffswitch2').prop('checked', true);
    names()

    localStorage.setItem('reallistdarkMode', true);
    localStorage.removeItem('reallistlightMode');
    localStorage.removeItem('reallisttransparentMode');
}

function TransparentPrimaryColor() {

    var userColor = document.getElementById('TransparentPrimaryColorID').value;
    localStorage.setItem('transparentPrimary', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('primaryHoverColor', userColor + 95);
    localStorage.setItem('primaryBorderColor', userColor);
    localStorage.setItem('primaryTransparent', userColor + 20);

    // removing light theme data 
    localStorage.removeItem('primaryColor')
    localStorage.removeItem('secondaryColor')
    localStorage.removeItem('darkPrimary')
    localStorage.removeItem('darksecondary')

    document.querySelector('body').classList.remove('dark-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.add('transparent-mode');

    $('#myonoffswitch3').prop('checked', true);
    names()

    localStorage.setItem('reallisttransparentMode', true);
    localStorage.removeItem('reallistlightMode');
    localStorage.removeItem('reallistdarkMode');
}

function changeTransparentSecondaryColor() {

    var userColor = document.getElementById('TransparentColorID2').value;
    localStorage.setItem('transparentsecondary', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('secondaryHoverColor', userColor + 95);
    localStorage.setItem('secondaryTransparentColor', userColor + 20);

    // removing light theme data 
    localStorage.removeItem('primaryColor')
    localStorage.removeItem('secondaryColor')
    localStorage.removeItem('darkPrimary')
    localStorage.removeItem('darksecondary')

    document.querySelector('body').classList.remove('dark-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.add('transparent-mode');

    $('#myonoffswitch3').prop('checked', true);
    names()

    localStorage.setItem('reallisttransparentMode', true);
    localStorage.removeItem('reallistlightMode');
    localStorage.removeItem('reallistdarkMode');
}
function TransparentBackgroundColor2() {

    var userColor = document.getElementById('TransparentColorID4').value;
    localStorage.setItem('transparentcolor2', userColor);

    // removing light theme data 
    localStorage.removeItem('primaryColor')
    localStorage.removeItem('secondaryColor')
    localStorage.removeItem('darkPrimary')
    localStorage.removeItem('darksecondary')

    document.querySelector('body').classList.remove('dark-mode');
    document.querySelector('body').classList.remove('light-mode');
    document.querySelector('body').classList.add('transparent-mode');

    $('#myonoffswitch3').prop('checked', true);
    names()

    localStorage.setItem('reallisttransparentMode', true);
    localStorage.removeItem('reallistlightMode');
    localStorage.removeItem('reallistdarkMode');
}

// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
    // convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
    // get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
        if (typeof a !== "undefined") { return a / 255 }
        if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
            return 1
        }
        return alpha
    }
    // convertion of hex code to rgba code 
function hexToRgba(hexValue, alpha) {
    if (!isValidHex(hexValue)) { return null }
    const chunkSize = Math.floor((hexValue.length - 1) / 3)
    const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
    const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
    return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}


let myVarVal, myVarVal1

function names() {

    let primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-bg-color').trim();
    let secondaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--secondary-color').trim();
    
    //get variable
    myVarVal = localStorage.getItem("primaryColor") || localStorage.getItem("darkPrimary") ||  localStorage.getItem("transparentPrimary") || primaryColorVal;
    myVarVal1 = localStorage.getItem("secondaryColor") || localStorage.getItem("darksecondary") || localStorage.getItem("transparentsecondary") || secondaryColorVal;


    // For index.html
	if(document.querySelector('#sales-status') !== null){
        sales();
    }
	if(document.querySelector('#survey') !== null){
        survey();
    }
	if(document.querySelector('#lineChart1') !== null){
        lineChart1();
    }
	if(document.querySelector('#catergorystatus') !== null){
        catergorystatus();
    }
	if(document.querySelector('#dataanalytics') !== null){
        dataanalytics();
    }
	if(document.querySelector('#purchase') !== null){
        purchase();
    }
	if(document.querySelector('#dailyfeedback') !== null){
        dailyfeedback();
    }
	if(document.querySelector('#dailygrowth') !== null){
        dailygrowth();
    }
	if(document.querySelector('#lineChart') !== null){
        lineChart();
    }
    if(document.querySelector('.sparkline_bar-2') !== null){
        sparkline_bar2();
    }

    let colorData4 = hexToRgba(myVarVal || primaryColorVal, 0.9)
    document.querySelector('html').style.setProperty('--primary-09', colorData4);
    
    let colorData5 = hexToRgba(myVarVal || primaryColorVal, 0.46)
    document.querySelector('html').style.setProperty('--primary-10', colorData5);

    let colorData8 = hexToRgba(myVarVal || primaryColorVal, 0.1)
    document.querySelector('html').style.setProperty('--primary-1', colorData8);

    let colorData9 = hexToRgba(myVarVal || primaryColorVal, 0.02)
    document.querySelector('html').style.setProperty('--primary-02', colorData9);

    let colorData10 = hexToRgba(myVarVal || primaryColorVal, 0.04)
    document.querySelector('html').style.setProperty('--primary-04', colorData10);

    let colorData11 = hexToRgba(myVarVal || primaryColorVal, 0.8)
    document.querySelector('html').style.setProperty('--primary-08', colorData11);

    let colorData12 = hexToRgba(myVarVal || primaryColorVal, 0.3)
    document.querySelector('html').style.setProperty('--primary-03', colorData12);

    let colorData6 = hexToRgba(myVarVal1 || secondaryColorVal, 0.86)
    document.querySelector('html').style.setProperty('--secondary-08', colorData6);

    let colorData7 = hexToRgba(myVarVal1 || secondaryColorVal, 0.46)
    document.querySelector('html').style.setProperty('--secondary-04', colorData7);

    let colorData13 = hexToRgba(myVarVal1 || secondaryColorVal, 0.3)
    document.querySelector('html').style.setProperty('--secondary-03', colorData13);
}
names()
