<style>

    /*======================================================================================================================
        Side Calender
    ======================================================================================================================*/

    .calender-wrp {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
    }

    .cm_calender {
        border-radius: 2px;
        background: #F9F9F9;
        overflow: hidden;
        width: 260px;
    }

    .cm_head {
        background: #168ca8;
        padding: 3px 15px;
        display: table;
    }

    .cm_head .bt-ac,
    .cm_head .cm_month-year {
        display: table-cell;
        vertical-align: middle;
    }

    .cm_head .cm_month-year {
        width: 100%;
        text-align: center;
        color: #fff;
        font-size: 14px;
    }

    .cm_head .cm_month-year span:last-child {
        color: rgba(255, 255, 255, 0.56);
    }

    .cm_head .bt-ac {
        padding: 0;
    }

    .cm_head .bt-ac svg {
        width: 32px;
        height: 32px;
        vertical-align: middle;
    }

    .cm_head .bt-ac svg path {
        fill: none;
        stroke: rgba(255, 255, 255, 1);
        stroke-width: 2px;
    }

    .cm_body {
        padding: 10px 15px;
        float: left;
    }

    .cm_body .c_day,
    .cm_body .c_date {
        display: block;
    }

    .cm_body .c_day, .cm_body .c_date {
        float: left;
    }

    .cm_body .c_day span,
    .cm_body .c_date span {
        float: left;
        text-align: center;
        font-size: 14px;
        width: 32.857px;
        padding: 6px 0;
    }

    .cm_body .c_day span {
        color: #168CA8;
        text-transform: uppercase;
        font-size: 12px;
        font-width: 500;
    }

    .cm_body .c_date span {
        color: #4f4f4f;
        border-radius: 50%;
        cursor: auto;
    }

    .cm_body .c_date span.disable {
        color: rgba(79, 79, 79, 0.56);
    }

    .cm_body .c_date span.select {
        color: #fff;
        background: #49b3cc;
    }

</style>


<div class="cm_calender">
    <div class="cm_head">
        <button class="bt-ac  bt-prev">
            <svg>
                <path d="M 17,12 l -5,5 l 5,5"/>
            </svg>
        </button>
        <div class="cm_month-year">
            <span>September,</span>
            <span>2016</span>
        </div>
        <button class="bt-ac bt-next">
            <svg>
                <path d="M 14,12 l 5,5 l -5,5"/>
            </svg>
        </button>
    </div>
    <div class="cm_body">
        <div class="c_day ">
            <span>Su</span>
            <span>Mo</span>
            <span>Tu</span>
            <span>We</span>
            <span>Th</span>
            <span>Fr</span>
            <span>Sa</span>
        </div>
        <div class="c_date ">
            <span class="disable">29</span>
            <span class="disable">30</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
            <span>9</span>
            <span>11</span>
            <span>12</span>
            <span>13</span>
            <span>14</span>
            <span>15</span>
            <span>16</span>
            <span class="select">17</span>
            <span>18</span>
            <span>19</span>
            <span>20</span>
            <span>21</span>
            <span>22</span>
            <span>23</span>
            <span>24</span>
            <span>25</span>
            <span>26</span>
            <span>27</span>
            <span>28</span>
            <span>29</span>
            <span>30</span>
            <span>31</span>
            <span class="disable">1</span>
            <span class="disable">2</span>
        </div>
    </div>
</div>

