<style>
    body {
        background: #0a0a0a  no-repeat 50% 0/cover
    }
    .mui-content {
        background-color: transparent
    }

    .mui-bar-nav {
        background-color: transparent
    }
</style>

<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
</header>
<div class="mui-content">
    <div class="mui-content-padded">
        <div class="uk-text-medium mui-text-center">
            <img src="/wap/img/user_icon_06.png" width="84" height="84">
        </div>
    </div>
    <div class="mui-input-card">
        <div class="mui-table-view mui-in-input-card">
            <?php $form = self::beginForm(['showLabel' => false]) ?>
            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAwFBMVEWZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZkEMgNjAAAAP3RSTlMABQcICQsNEBcYIikqLDQ1Njc7PT9JTE9WXF1lZmpscnR4eXt9gIWHi42vtLa8vb/CxcjO4OHj5+jq7PDx8/SgWpp1AAAAjUlEQVQY02WPxxKCQBAFG0UxY86CqBgwYFjEzP//lYddsCjfpev1HGYGANq713PbIokTDA1jEEzj3hQFgGJgKrFYSq7mSrhumv/CWUtubCU6vqTfVSJ7LwOUHrl47+RiQP6c3EHl2oferapqwwtnGdCc0KsDtYOwdDnRLbE3+Yy031Pa+E1EKhGnKJXjFyUADprqI9SBAAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($userAccount, 'realname')->textInput(['placeholder' => '输入真实姓名','class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAwFBMVEWZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZkEMgNjAAAAP3RSTlMABQcICQsNEBcYIikqLDQ1Njc7PT9JTE9WXF1lZmpscnR4eXt9gIWHi42vtLa8vb/CxcjO4OHj5+jq7PDx8/SgWpp1AAAAjUlEQVQY02WPxxKCQBAFG0UxY86CqBgwYFjEzP//lYddsCjfpev1HGYGANq713PbIokTDA1jEEzj3hQFgGJgKrFYSq7mSrhumv/CWUtubCU6vqTfVSJ7LwOUHrl47+RiQP6c3EHl2oferapqwwtnGdCc0KsDtYOwdDnRLbE3+Yy031Pa+E1EKhGnKJXjFyUADprqI9SBAAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($userAccount, 'id_card')->textInput(['placeholder' => '输入身份证号','class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEWZmZnMzMz///+ZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZnMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZly+It3AAAAJ3RSTlMAAAAGBwkKDhESKSotMGZnaWpscHGAgK+wsbKztLXFxsvM6fH09fzEdjzcAAAAcklEQVQY03XOyRKCMBBF0ZuHIo6AGiTiCEr+/w/dUF2aKu/yLPo1csD2+n6FNeCEHGz63aKo+5VBqAH2J4OhAFgOBhEA4h/I2zFOje1cqOoyprJLKdR4LN8Y3G8JPB8JeJ/A8ZDA19HqPLPZrhTKw89jH6mnCbvVGj10AAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($userAccount, 'bank_name')->textInput(['placeholder' => '开户银行','class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEWZmZnMzMz///+ZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZnMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZly+It3AAAAJ3RSTlMAAAAGBwkKDhESKSotMGZnaWpscHGAgK+wsbKztLXFxsvM6fH09fzEdjzcAAAAcklEQVQY03XOyRKCMBBF0ZuHIo6AGiTiCEr+/w/dUF2aKu/yLPo1csD2+n6FNeCEHGz63aKo+5VBqAH2J4OhAFgOBhEA4h/I2zFOje1cqOoyprJLKdR4LN8Y3G8JPB8JeJ/A8ZDA19HqPLPZrhTKw89jH6mnCbvVGj10AAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($userAccount, 'bank_address')->textInput(['placeholder' => '请填写收款银行，需完整填写省、市、支行名称','class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAwFBMVEWZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZkEMgNjAAAAP3RSTlMABQcICQsNEBcYIikqLDQ1Njc7PT9JTE9WXF1lZmpscnR4eXt9gIWHi42vtLa8vb/CxcjO4OHj5+jq7PDx8/SgWpp1AAAAjUlEQVQY02WPxxKCQBAFG0UxY86CqBgwYFjEzP//lYddsCjfpev1HGYGANq713PbIokTDA1jEEzj3hQFgGJgKrFYSq7mSrhumv/CWUtubCU6vqTfVSJ7LwOUHrl47+RiQP6c3EHl2oferapqwwtnGdCc0KsDtYOwdDnRLbE3+Yy031Pa+E1EKhGnKJXjFyUADprqI9SBAAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($userAccount, 'bank_card')->textInput(['placeholder' => '输入银行卡号', 'class' => 'uk-input uk-text-medium'])  ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEWZmZnMzMz///+ZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZnMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZly+It3AAAAJ3RSTlMAAAAGBwkKDhESKSotMGZnaWpscHGAgK+wsbKztLXFxsvM6fH09fzEdjzcAAAAcklEQVQY03XOyRKCMBBF0ZuHIo6AGiTiCEr+/w/dUF2aKu/yLPo1csD2+n6FNeCEHGz63aKo+5VBqAH2J4OhAFgOBhEA4h/I2zFOje1cqOoyprJLKdR4LN8Y3G8JPB8JeJ/A8ZDA19HqPLPZrhTKw89jH6mnCbvVGj10AAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($userAccount, 'coding')->textInput(['placeholder' => '代理商邀请码', 'class' => 'uk-input uk-text-medium'])  ?>
                    </div>
                </div>
            </div>

            <?= $form->field($userAccount, 'bank_mobile')->textInput(['type' => 'hidden', 'value' => u()->mobile]) ?>
            <?php self::endForm() ?>
        </div>
    </div>
    <div class="mui-content-padded mui-text-right uk-text-medium uk-text-contrast">
        <div class="uk-checkbox uk-checkbox-contrast">
            <label class="">
                <input class="" id="agreechek" type="checkbox" value="1" checked="">
                已阅读并同意 </label>
            <a class="" href="Javascript:" onclick="showxieyi();">
                《经纪人规则》
            </a>
        </div>
    </div>
    <?php if(u()->apply_state == \frontend\models\User::APPLY_STATE_WAIT) :?>

        <div class="mui-content-padded ">
            <button type="button" class="mui-btn mui-btn-warning mui-btn-block">
                信息正在审核中,请耐心等待!
            </button>
        </div>
    <?php else :?>
        <div class="mui-content-padded ">
            <button type="button" class="mui-btn mui-btn-warning mui-btn-block registerManager">
                我已经填写完毕提交审核
            </button>
        </div>
    <?php endif ?>

</div>
<script type="text/javascript" src="/js/mui.min.js"></script>
<script type="text/javascript">
    mui.init();
    $(function () {

        <?php if(u()->apply_state == \frontend\models\User::APPLY_STATE_WAIT) :?>
            layer.alert('信息正在审核中····请耐心等待!');
        <?php endif ?>

        $(".registerManager").click(function () {
            if(!$("#agreechek").is(":checked")){//选中
                layer.alert("请先阅读并同意《经纪人规则》");return false;
            }

            $("form").ajaxSubmit($.config('ajaxSubmit', {
                success: function (msg) {
                    if (!msg.state) {
                        $.alert(msg.info);
                    } else {
                        $.alert(msg.info);
                        window.location.href = '<?= url('user/index') ?>'
                    }
                }
            }));
            return false;
        });
    });
</script>


<script type="text/javascript" charset="utf-8">

    function showxieyi() {
        layer.open({
            type: 1,
            title: '《经纪人规则》',
            shadeClose: true,
            shade: 0.8,
            area: ["80%", '90%'],
            offset: '20px',
            btn: ['我已阅读并同意《经纪人规则》'],
            yes: function(index) {
                layer.close(index);
            },
            content: "<div style='padding:10px;line-height: 25px;font-size: 14px;'>" + $('#xieyicontent').html() + "</div>",
        });
    }

</script>
<div id="xieyicontent" style="display: none">
    <p>
        《<?= config('web_name', '夕秀微盘') ?>推广服务人员管理规则》
    </p>
    <p><?= config('web_name', '夕秀微盘') ?>，合法高效管理为“<?= config('web_name', '夕秀微盘') ?>”提供推广服务劳务的人员（下文简称“经纪人”），特制订该管理规则。
    <p>一、经纪人适格人员</p>
    <p>1、年满18岁且具有完全民事行为能力；</p>
    <p>2、在职人员需提供与现就职单位的劳动合同的复印件；自由职业者（指未与政府、企事业单位建立劳动关系的社会人员）需签订《个人承诺书》。</p>
    <p>3、承诺遵守<?= config('web_name', '夕秀微盘') ?>相关规章制度；</p>
    <p>1、通过<?= config('web_name', '夕秀微盘') ?>平台提供第一条经纪人适格条件的证明（包含身份证复印件、银行卡正面复印件）</p>
    <p>2、注册开通<?= config('web_name', '夕秀微盘') ?>专用经纪人号码。</p>
    <p>三、经纪人费用结算规则</p>
    <p>1、经纪人服务费用计算方式 </p>
    自然周内当日的劳务服务费用＝自然周内当日所属乙方合格客户<?= config('web_name', '夕秀微盘') ?>新增交易手续费×下表对应比例 。有关合格客户<?= config('web_name', '夕秀微盘') ?>的交易手续费数额，乙方可要求甲方提供相关凭证。备注：乙方可以通过甲方的<?= config('web_name', '夕秀微盘') ?>产品实时查询结算周期内的劳务服务费用总额，当日劳务服务费用总额每小时自动更新一次。 服务费支付规则 经纪人累计合格客户数量 服务费支付基数 服务费支付比例 </p>
    <p>2、劳务服务费用结算周期 服务费用支付结算周期为按【周】结算，即【每月的自然周，从星期一到星期天为一结算周期】劳务服务费用支付总额为自然周内每天劳务服务费用的累计总和。甲方当周需支付给乙方的劳务服务费用（代扣代缴相关税费后的实发金额）不足我方要求的最低金额（甲方有权根据实际经营需要改变最低金额，但应在前一个结算周期通知乙方）时，劳务服务费用累计到下一结算周期进行发放。若满4个结算周期，即4个自然周仍不足以上最低金额时，甲方有义务进行劳务服务费用的结算支付。
    </p>
    <p>3、每个结算周期结束后的【一个 】工作日内，乙方可向甲方通过<?= config('web_name', '夕秀微盘') ?>客服针对显示在<?= config('web_name', '夕秀微盘') ?>产品的劳务服务费用是否正确提出异议。若乙方在规定期限内无异议，甲方将于每周三支付上一周的劳务服务费用给乙方，如遇节假日顺延至下一工作日。</p>
    <p>四、双方权利义务</p>
    <p>1、<?= config('web_name', '夕秀微盘') ?>有权根据<?= config('web_name', '夕秀微盘') ?>产品运营推广战略调整情况随时单方终止本活动，但提前一天通知经纪人，并按本协议结算完毕应支付给经纪人的服务费用。</p>
    <p>2、经纪人所获得的服务费用，应按法律规定缴纳个人所得税等税务，由<?= config('web_name', '夕秀微盘') ?>代扣代缴。</p>
    <p>3、经纪人应遵守国家相关法律法规及上海大象平泰金中钥财富息服务有限公司对外宣传的相关规章制度，通过其个人拥有的资源或可以合法使用的渠道进行<?= config('web_name', '夕秀微盘') ?>产品的推广宣传。</p>
    <p>4、经纪人应妥善保管<?= config('web_name', '夕秀微盘') ?>交付的<?= config('web_name', '夕秀微盘') ?>产品介绍、操作使用培训资料、对外宣传物料等资料，并对该资料和经纪人的客户信息负有保密义务。</p>
    <p>5、乙方收款账户信息默认为乙方在申请成为甲方个人劳务服务人员时上传的银行卡相关信息，且保证户名为其上传的身份证信息展示的姓名。</p>
    本规则最终解释权归<?= config('web_name', '夕秀微盘') ?>所有

    <p>
        <br>
    </p>
</div>