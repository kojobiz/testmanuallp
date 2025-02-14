<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikkosha_theme
 */

?>
<style>
	.logo-footer {
        height:38px!important;
    }

	.page-top {
		bottom: 2.2rem !important;
        background: url(../../../cms/wp-content/themes/ikkosha_theme/images/service/manual/lp/icon_totop.png) no-repeat center / contain;
	}
    footer {
    padding-top: 28px;
    padding-bottom: 24px;
    // height: 195px;
    padding-left: 20px;
    padding-right: 20px;
    color: #fff;
    background-color: #A20000;
    .company-wrapper {
        display: grid;
        grid-template-columns: 0.3fr 1fr;
    }
    .l-footer {
        max-width: 1190px;
        width: 85%;
        margin:0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-end;
        font-family: "Noto Sans JP", serif;
        font-size: 12px;
        table {
            margin-top: 9px;
            th, td {
                font-weight: 200; 
            }
            th {
                letter-spacing: 0.13em;
            }
            td:before {
                content: ":";
                margin-right: 8px;
                margin-left: 6px;
            }
        } 
        .l-copy {
            margin-bottom: 0px!important;
            font-weight: 200;
            font-size: 14px;
        }
    }
}

@media (max-width: 768px) {
    .sp-divnone {
        display: contents;
    }
    .l-footer {
        flex-direction: column!important;
        align-items: center!important;
        width: 95%;
    }
    th, td {
        font-weight: 300!important; 
    }
    .l-copy {
        margin-top: 25px;
    }
    footer {
        padding-top: 36px;
        padding-bottom: 12px;
    }
}
</style>

</main>
<a href="#" id="pageTop" class="page-top"></a>
<footer>
        <div class="l-footer">
            <div class="sp-divnone">
                <img src="../../../cms/wp-content/themes/ikkosha_theme/images/service/manual/lp/logo_footer.png" alt="" height="38" width="auto" class="logo-footer">
                <table>
                    <tbody>
                    <tr>
                        <th>会社名</th>
                        <td>株式会社一向社</td>
                    </tr>
                    <tr>
                        <th>創業年月</th>
                        <td>大正11年（1922年）9月</td>
                    </tr>
                    <tr>
                        <th>設立年月日</th>
                        <td>昭和9年（1934年）8月18日
                        </td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>〒553-0001 大阪市福島区海老江5-5-7
                        </td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>15,000千円</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p class="l-copy">&copy;ikkosha Co., Ltd. All Rights Reserved.</p>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>