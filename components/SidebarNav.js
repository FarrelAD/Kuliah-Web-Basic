class SidebarNav extends HTMLElement {
    constructor() {
        super()

        const shadow = this.attachShadow({ mode: 'open' })
        shadow.innerHTML = `
            <div class="week-option">Minggu 1</div>
            <div class="week-option">Minggu 2</div>
            <div class="week-option">Minggu 3</div>
            <div class="week-option">Minggu 4</div>
            <div class="week-option">Minggu 5</div>
            <div class="week-option">Minggu 6</div>
            <div class="week-option">Minggu 7</div>
            <div class="week-option">Minggu 8</div>
            <div class="week-option">Minggu 9</div>
            <div class="week-option">Minggu 10</div>
            <div class="week-option">Minggu 11</div>
            <div class="week-option">Minggu 12</div>
            <div class="week-option">Minggu 13</div>
            <div class="week-option">Minggu 14</div>
        `

        const style = document.createElement('style')
        style.textContent = `
            .week-option {
                box-sizing: border-box;
                width: 100%;
                padding: .5rem .5rem;
                padding-left: 2rem;
                outline: 2px solid black;
            }

            .week-option:first-of-type {
                border-top-left-radius: 0.4rem;
                border-top-right-radius: 0.4rem;
                background-color: black;
                color: white;
                font-weight: bold;
            }

            .week-option:hover {
                cursor: pointer;
                background-color: lightgray;
                color: white;
                outline: 2px solid gray;
            }

            .week-option:active {
                background-color: black;
                outline: 2px solid black;
                color: white;
                font-weight: bold;
            }
        `

        shadow.append(style)
    }
}

customElements.define('sidebar-nav', SidebarNav)