const weekOptions = document.querySelectorAll('.week-option')
const weekProjectsData = document.querySelectorAll('.week-project-data')

let currentWeek = 0
weekOptions.forEach((week, index) => {
    week.addEventListener('click', function() {
        weekProjectsData[currentWeek].style.display = 'none'
        weekOptions[currentWeek].style.backgroundColor = 'white'
        weekOptions[currentWeek].style.color = 'black'
        weekOptions[currentWeek].style.fontWeight = 'normal'
        currentWeek = index
        weekProjectsData[currentWeek].style.display = 'grid'
        this.style.backgroundColor = 'black'
        this.style.color = 'white'
        this.style.fontWeight = 'bold'
    })
})


// Attach component to main HTML document
const weekProjectDataSection = document.querySelectorAll('.week-project-data')

import data from '../../data/data.js'
import '../../components/ProjectCard.js'

for (let i = 0; i < data.length; i++) {
    data[i].forEach(el => {
        const projectCard = document.createElement('project-card')
        projectCard.setAttribute('web-src', el.webSrc)
        projectCard.setAttribute('web-img-preview-src', el.webImgPreviewSrc)
        projectCard.setAttribute('project-title', el.projectTitle)
        projectCard.setAttribute('project-desc', el.projectDesc)
        weekProjectDataSection[i].appendChild(projectCard)
    })
}