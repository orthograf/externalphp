{extends file="_index.tpl"}

{block name="layout_vars"}
    {$noSidebar=true}
{/block}

{block name="layout_pre_content"}
    <div class="panel panel-default panel-search flat">
        <div class="panel-body">
            <h2 class="panel-header">
                Title page
            </h2>
        </div>
    </div>
{/block}

{block name="layout_content"}
    {include file="externalphp-show.tpl"}
{/block}

