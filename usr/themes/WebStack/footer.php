<footer class="main-footer sticky footer-type-1">
    <div class="footer-inner">
        <div class="footer-text">
            &copy; <?php echo date('Y'); ?>
            <strong>Webstack</strong>
            <!-- Source From <a href="https://github.com/WebStackPage/WebStackPage.github.io#%E6%96%B9%E6%B3%957-%E4%BD%BF%E7%94%A8typecho%E4%B8%BB%E9%A2%98%E6%84%9F%E8%B0%A2seogo%E6%8F%90%E4%BE%9B" target="_blank"><strong>Webstack - Typecho</strong></a>、
            <a href="https://github.com/wclk/WebStack_ZMKI" target="_blank"><strong>WebStack_ZMKI</strong></a> -->
        </div>
        <div class="go-up">
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
        </div>
    </div>
</footer>
</div>
</div>

<!-- 锚点平滑移动 -->
<?php if ($this->is('index')) : ?>
    <script type="text/javascript">
        var href = "";
        var pos = 0;
        $("a.smooth").click(function(e) {
            $("#main-menu li").each(function() {
                $(this).removeClass("active");
            });
            $(this).parent("li").addClass("active");
            e.preventDefault();
            href = $(this).attr("href");
            hrefSelectorID = "[id='" + href.replace("#", "") + "']"
            pos = $(hrefSelectorID).offset().top - 30;
            $("html,body").animate({
                scrollTop: pos
            }, 500);
        });
    </script>
<?php endif; ?>

<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/TweenMax.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/resizeable.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/joinable.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/xenon-api.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/xenon-toggles.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/xenon-custom.js'); ?>"></script>
</body>

</html>