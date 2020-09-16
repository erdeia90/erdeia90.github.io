<?php
/**
 * @package   solo
 * @copyright Copyright (c)2014-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use Awf\Html;
use Awf\Text\Text;

defined('_AKEEBA') or die();

// Used for type hinting
/** @var  \Solo\View\Log\Html  $this */

$router = $this->container->router;

?>
@if(count($this->logs))
<form name="adminForm" id="adminForm" action="@route('index.php?view=log')" method="POST"
      class="akeeba-form--inline">
	<div class="akeeba-form-group">
		<label for="tag">
			@lang('COM_AKEEBA_LOG_CHOOSE_FILE_TITLE')
		</label>
		@html('select.genericList', $this->logs, 'tag', 'onchange=this.form.submit()', 'value', 'text', $this->tag, 'tag')
	</div>

	@if(!empty($this->tag))
        <div class="akeeba-form-group--actions">
            <button class="akeeba-btn--teal" onclick="window.location='<?php echo $router->route('index.php?view=log&format=raw&task=download&tag=' . urlencode($this->tag)); ?>'; return false;">
                <span class="akion-android-download"></span>
                @lang('COM_AKEEBA_LOG_LABEL_DOWNLOAD')
            </button>
        </div>
    @endif

    <input type="hidden" name="token" value="@token()" >
</form>
@endif

@if(!empty($this->tag))
    @if ($this->logTooBig)
        <div class="akeeba-block--warning">
            <p>
                @sprintf('COM_AKEEBA_LOG_SIZE_WARNING', number_format($this->logSize / (1024 * 1024), 2))
            </p>
            <a class="akeeba-btn--dark" id="showlog" href="#">
                @lang('COM_AKEEBA_LOG_SHOW_LOG')
            </a>
        </div>
    @endif

    <div class="iframe-holder" id="frame-holder" style="display: {{ $this->logTooBig ? 'none' : 'block' }};">
        @if (!$this->logTooBig)
            <iframe
                    src="<?php echo $router->route('index.php?view=log&task=iframe&tmpl=component&layout=raw&tag=' . urlencode($this->tag)) ?>"
                    width="99%" height="500px">
            </iframe>
        @endif
    </div>
@endif

@if(!count($this->logs))
<div class="alert alert-danger">
	@lang('COM_AKEEBA_LOG_NONE_FOUND')
</div>
@endif
