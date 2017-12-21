<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\test/application/agent/view/admin/agent\wxcreate.html";i:1512980735;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title['title']; ?> - 参考文案</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="__MODULE_CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__MODULE_CSS__/font-awesome.min.css" rel="stylesheet">
    <link href="__MODULE_CSS__/toastr.min.css" rel="stylesheet">
    <script src="__MODULE_JS__/jquery.js"></script>
    <script src="__MODULE_JS__/lodash.min.js"></script>
    <script src="__MODULE_JS__/toastr.min.js"></script>
    <script src="__MODULE_JS__/handlebars.min.js"></script>
    <script src="__MODULE_JS__/knockout-min.js"></script>
    <script src="__MODULE_JS__/jquery.validate.min.js"></script>
    <script src="__MODULE_JS__/jquery.validate.unobtrusive.min.js"></script>
    <script src="__MODULE_JS__/bootstrap.min.js"></script>
    <script src="__MODULE_JS__/clipboard.min.js"></script>
    <script>
        toastr.options.positionClass = 'toast-bottom-right';
    </script>
    <script src="__MODULE_JS__/admin.js?v=10"></script>

    <link rel="stylesheet" href="__MODULE_CSS__/page_mp_article.css" />
    <link rel="stylesheet" href="__MODULE_CSS__/page_mp_article_improve_combo.css" />
    <link rel="stylesheet" href="__MODULE_CSS__/admin.css?v=5"/>

    <!--[if lte IE 8]>
    <script src="__MODULE_CSS__/html5shiv.min.js"></script>
    <script src="__MODULE_CSS__/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        #editor-bar .dropdown-menu {
            height: auto;
            max-height: 400px;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <div class="rich_media">
        <div class="rich_media_inner" style="padding-top:0">
            <div class="rich_media_area_primary">
                <h1 id="wx-article-title" class="rich_media_title"></h1>
                <div class="rich_media_content">
                    <div id="wx-article-content">
                        <div id="wx-article-cover"></div>
                        <div id="wx-article-body"></div>
                        <div id="wx-article-footer"></div>
                    </div>
                </div>
            </div>

                    </div>
    </div>

    <nav id="editor-bar" class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#editor-menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="editor-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-header"></i> 文案标题 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- ko foreach: titles -->
                            <li><a href="#" data-bind="text: title, click: $root.changeTitle"></a></li>
                            <!-- /ko -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-image"></i> 文案封面 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- ko foreach: covers -->
                            <li>
                                <a href="#" data-bind="click: $root.changeCover">
                                    <img style="max-width:200px;max-height:40px;" data-bind="attr: { src: cover_url }" />
                                </a>
                            </li>
                            <!-- /ko -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">正文模板 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- ko foreach: body_templates -->
                            <li style="border-bottom:#eee 1px solid;">
                                <a href="#" data-bind="click: $root.changeBodyTemplate">
                                    <img style="max-height: 40px;" data-bind="attr: { src: preview_img }" />
                                </a>
                            </li>
                            <!-- /ko -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">原文引导模板 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- ko foreach: footer_templates -->
                            <li style="border-bottom:#eee 1px solid;">
                                <a href="#" data-bind="click: $root.changeFooterTemplate">
                                    <img style="max-height: 40px;" data-bind="attr: { src: preview_img }" />
                                </a>
                            </li>
                            <!-- /ko -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-copy"></i> 复制 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);" id="btn-copy-title" data-clipboard-target="#wx-article-title">复制标题</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id="btn-copy-content" data-clipboard-target="#wx-article-content">复制正文</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-form navbar-right">
                    <span data-bind="visible: is_novel_online" style="display:none;">
                                                    <button type="button" class="btn btn-primary" data-bind="click: openReferralLinkModal">
                                <i class="fa fa-link"></i> 生成原文链接
                            </button>
                                            </span>
                    <span data-bind="visible: !is_novel_online()" style="display:none;">
                        <button type="button" class="btn btn-disabled">小说已下架</button>
                    </span>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="modal fade" id="create-referral-link-modal" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bind="click: close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" data-bind="text: title"></h4>
            </div>
            <div class="modal-body">
                <div data-bind="visible: loading" class="loading-panel">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <form class="form-horizontal" style="display: none" data-bind="visible: !loading()">
                    <div class="form-group">
                        <label class="control-label col-sm-3">入口页面</label>
                        <div class="col-sm-7">
                            <p class="form-control-static">
                                <span data-bind="visible: type() == 0">小说阅读页</span>
                                <span data-bind="visible: type() == 1">首页</span>
                            </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3"><span class="required">*</span>渠道名称</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" maxlength="100" name="description"
                                   data-val="true"
                                   data-val-required="请填写渠道名称"
                                   data-bind="value: description" />
                            <p class="help-block help-block-error" data-valmsg-for="description" data-valmsg-replace="true"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3"><span class="required">*</span>强制关注</label>
                        <div class="col-sm-7">
                            <label class="radio-inline">
                                <input type="radio" name="follow_type" value="1"
                                       data-bind="checked: follow_type"
                                       data-val="true"
                                       data-val-required="请选择是否强制关注"/>
                                <span>是</span>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="follow_type" value="0"
                                       data-bind="checked: follow_type"/>
                                <span>否</span>
                            </label>
                            <p class="help-block help-block-error" data-valmsg-for="follow_type" data-valmsg-replace="true"></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3"><span class="required">*</span>渠道类别</label>
                        <div class="col-sm-7">
                            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <label class="radio-inline">
                                <input type="radio" name="category" value="<?php echo $key; ?>"
                                       data-bind="checked: referrer_type"
                                       data-val="true"
                                       data-val-required="请选择渠道类别"/>
                                <span><?php echo $vo; ?></span>
                            </label>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <p class="help-block help-block-error" data-valmsg-for="referrer_type" data-valmsg-replace="true"></p>
                        </div>
                    </div>

                    <div data-bind="visible: type() == 0" style="display:none">
                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-3">
                                <p class="form-control-static">
                                    <img style="width:80px" data-bind="attr: { src: novel_avatar }" />
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">阅读原文章节</label>
                            <div class="col-sm-7">
                                <p class="form-control-static">
                                    <strong data-bind="html: article_title"></strong>
                                </p>
                            </div>
                        </div>
                                            </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bind="click: submit, text: id() ? '保存修改' : '生成链接'"></button>
            </div>
        </div>
    </div>
</div>

<script>
    var GetReferralLinkModal = function () {
        var self = this;
        var $modal = null;
        var callbacks = null;
        var defer = null;
        var opts = null;
        var link = null; // 生成的链接，{ id, url }
        var model = {
            loading: ko.observable(false),
            submitting: ko.observable(false),

            title: ko.observable(),

            id: ko.observable(),
            type: ko.observable(0),
            article_id: ko.observable(),
            novel_id: ko.observable(),
            novel_avatar: ko.observable(),
            novel_title: ko.observable(),
            article_title: ko.observable(),
            referrer_type: ko.observable(),
            follow_type: ko.observable(),
            description: ko.observable(),
            force_follow_chapter_idx: ko.observable(),
            force_follow_chapter_id: ko.observable(),
            force_follow_chapter_title: ko.observable(),

            submit: function () {
                self.submit();
            },
            close: function () {
                self.close();
            }
        };

        self.open = function (options) {
            self.reset();

            defer = $.Deferred();

            opts = options;

            if (!$modal) {
                $modal = $('#create-referral-link-modal');
                ko.applyBindings(model, $modal.find('.modal-content')[0]);

                model.force_follow_chapter_idx.subscribe(function (idx) {
                   if (!idx || !/^\d+$/.test(idx)) {
                       model.force_follow_chapter_id(null);
                       model.force_follow_chapter_title(null);
                   } else {
                       self.tryFetchForceFollowChapterInfo();
                   }
                });
            }

            callbacks = options.callbacks || {};

            model.title(options.title || (options.id ? '修改推广链接属性' : '生成推广链接'));

            if (options.type !== undefined) {
                model.type(options.type);
            }

            model.loading(true);

            var promise = $.Deferred().resolve().promise();

            if (options.id) {
                model.id(options.id);

                promise = $.get('/backend/referral_links/api_get/' + options.id, function (result) {
                    model.type(result.type);
                    model.article_id(result.article_id);
                    model.description(result.description);
                    model.referrer_type(result.referrer_type);
                    model.follow_type(result.follow_type);
                    model.force_follow_chapter_idx(result.force_follow_chapter_idx);

                    opts.wx_article_title_id = result.wx_article_title_id;
                    opts.wx_article_cover_id = result.wx_article_cover_id;
                    opts.wx_article_body_template_id = result.wx_article_body_template_id;
                    opts.wx_article_footer_template_id = result.wx_article_footer_template_id;
                });
            } else {
                model.article_id(options.article_id);
            }

            promise.then(function () {
                self.tryFetchNovelArticleInfo();
                self.tryFetchForceFollowChapterInfo();
                model.loading(false);
            });

            $modal.modal('show');

            return defer.promise();
        };

        self.tryFetchNovelArticleInfo = function () {
            var articleId = model.article_id();
            if (!articleId) {
                return $.Deferred().resolve();
            }

            return $.get('/admin.php/Agent/Agent/getactirle/id/' + articleId)
                .then(function (result) {
                    model.novel_id(result.novel.id);
                    model.novel_avatar(result.novel.avatar);
                    model.novel_title(result.novel.title);
                    model.article_title(result.title);
                });
        };

        self.tryFetchForceFollowChapterInfo = function () {
            var idx = model.force_follow_chapter_idx();
            if (idx) {
                idx = parseInt(idx);
            }

            if (!idx) {
                return false;
            }

            // 如果 novel_id 未加载，也忽略，novel_id 加载后会再触发一次获取关注章节信息
            if (!model.novel_id()) {
                return false;
            }

            $.get('/backend/articles/api_get_basic_info_by_idx', {
                nid: model.novel_id(),
                idx: model.force_follow_chapter_idx()
            })
                .then(function (result) {
                    model.force_follow_chapter_id(result.id);
                    model.force_follow_chapter_title(result.title);
                })
                .fail(handleAjaxError);
        };

        self.submit = function () {
            if (model.submitting()) {
                return false;
            }

            if (!$modal.find('form').valid()) {
                return false;
            }

            model.submitting(true);
			
            $.ajax({
                url: '/admin.php/Agent/Agent/savewa/',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    id: model.id(),
                    type: model.type(),
                    article_id: model.article_id(),
                    referrer_type: model.referrer_type(),
                    follow_type: model.follow_type(),
                    force_follow_chapter_idx: model.force_follow_chapter_idx(),
                    description: model.description(),
                    wx_article_title_id: opts.wx_article_title_id,
                    wx_article_cover_id: opts.wx_article_cover_id,
                    wx_article_body_template_id: opts.wx_article_body_template_id,
                    wx_article_footer_template_id: opts.wx_article_footer_template_id
                })
            })
                .then(function (result) {
                    if(result.code == 0){
                        alert(result.msg)
                        return false;
                    }
                    link = result;
                    if (callbacks.link_generated) {
                        callbacks.link_generated(result);
                    }

                    self.close();

                    Modal.open({
                        title: model.id() ? '保存成功' : '推广链接生成成功',
                        backdrop: 'static',
                        keyboard: false,
                        body:
                            '<div>' +
                                '<div>请复制下方推广链接，后续您可以在后台菜单的"推广链接"中找到它并查看统计数据:</div>' +
                                '<div style="margin:10px 0" class="text-primary">' + result.url + '</div>' +
                                '<div style="margin:10px 0;color:red;font-weight:bold;"><i class="fa fa-info-circle"></i> 请务必使用此链接作为文案的原文链接，不要使用微信中点开后手工复制的链接</div>' +
                            '</div>',
                        callbacks: {
                            close: function () {
                                if (link) {
                                    defer.resolve(link);
                                } else {
                                    defer.reject({ reason: 'cancel' });
                                }
                            }
                        },
                        buttons: [
                            {
                                text: '复制链接',
                                className: 'btn-primary',
                                clipboard: {
                                    text: function () {
                                        return link.url;
                                    },
                                    success: function () {
                                        var $modal = this.$modal();
                                        var $hint = $modal.find('.copy-success-hint');
                                        if ($hint.length === 0) {
                                            $modal.find('.modal-footer').prepend('<span style="display:inline-block;margin-right:10px;color:red;vertical-align:middle;" class="copy-success-hint"></span>');
                                            $hint = $modal.find('.copy-success-hint');
                                        }

                                        $hint.html('复制成功!');
                                    }
                                }
                            },
                            {
                                text: '关闭',
                                click: function () {
                                    this.close();
                                }
                            }
                        ]
                    })
                })
                .fail(handleAjaxError)
                .always(function () {
                    model.submitting(false);
                });
        };

        self.close = function () {
            $modal.modal('hide');
        };

        self.reset = function () {
            link = null;

            model.loading(false);
            model.submitting(false);

            model.id(null);
            model.article_id(null);
            model.novel_avatar(null);
            model.novel_title(null);
            model.article_title(null);
            model.referrer_type(null);
            model.follow_type(null);
            model.force_follow_chapter_idx(null);
            model.force_follow_chapter_id(null);
            model.force_follow_chapter_title(null);
            model.description(null);
        }
    };

    GetReferralLinkModal.instance = new GetReferralLinkModal();

    $(function () {
        $(document).on('click', '[data-toggle="create-referral-link"]', function () {
            GetReferralLinkModal.instance.open({
                article_id: $(this).data('article-id')
            });

            return false;
        });
    });
</script>

    <script>
        $(function () {
            var editor = new WxArticleEditor({
                novel_id: '<?php echo $title['id']; ?>',//小说ID
                is_novel_online: true,//是否上架
                article_id: '<?php echo $id; ?>', //章节id
                next_article_id: '<?php echo $nextid['0']['id']; ?>', //下一张id
                category_id: '<?php echo !empty($leixing['tstype'])?$leixing['tstype']:1; ?>',  //类型ID
                referral_link_id: null,   //推荐链接id
                title_id: null,			//标题id
                cover_id: null,		//图片id
                body_template_id: '',  //模板id
                footer_template_id: ''	//底部id
            });

            editor.init();

            new Clipboard('#btn-copy-title').on('success', function (e) {
                e.clearSelection();
                toastr.success('标题复制成功');
            });
            new Clipboard('#btn-copy-content').on('success', function (e) {
                e.clearSelection();
                toastr.success('正文复制成功');
            });

            $('[data-toggle="copy-link"]').each(function () {
                var clipboard = new Clipboard(this, {
                    text: function () {
                        return $('#txt-referral-link').val();
                    }
                });
                clipboard.on('success', function (e) {
                    e.clearSelection();
                    toastr.success('链接复制成功');
                });
            });
        });

        var EditorBar = function (options) {
            var self = this;
            var editor = options.editor;
            var model = {
                is_novel_online: ko.observable(options.is_novel_online),
                titles: ko.observableArray(options.titles),
                covers: ko.observableArray(options.covers),
                body_templates: ko.observableArray(options.body_templates),
                footer_templates: ko.observableArray(options.footer_templates),

                changeTitle: function (title) {
                    scrollToElement('#wx-article-title', { offset: 10 }, function () {
                        editor.changeTitle(title.id);
                    });
                },

                changeCover: function (cover) {
                    scrollToElement('#wx-article-cover', { offset: 10 }, function () {
                        editor.changeCover(cover.id);
                    });
                },

                changeBodyTemplate: function (template) {
                    scrollToElement('#wx-article-body', { offset: 10 }, function () {
                        editor.changeBodyTemplate(template.id);
                    });
                },

                changeFooterTemplate: function (template) {
                    scrollToElement('#wx-article-footer', { offset: 10 }, function () {
                        editor.changeFooterTemplate(template.id);
                    });
                },

                openReferralLinkModal: function () {
                    GetReferralLinkModal.instance
                        .open({
                            article_id: editor.nextArticleId,
                            wx_article_title_id: editor.titleId,
                            wx_article_cover_id: editor.coverId,
                            wx_article_body_template_id: editor.bodyTemplateId,
                            wx_article_footer_template_id: editor.footerTemplateId
                        })
                        .then(function (link) {
                            location.href = '/admin.php/agent/agent/wxedit/id/' + link.id;
                        });
                },

                editReferralLink: function () {
                    GetReferralLinkModal.instance
                        .open({
                            id: editor.referralLinkId,
                            article_id: editor.nextArticleId,
                            wx_article_title_id: editor.titleId,
                            wx_article_cover_id: editor.coverId,
                            wx_article_body_template_id: editor.bodyTemplateId,
                            wx_article_footer_template_id: editor.footerTemplateId
                        });
                }
            };

            self.init = function () {
                ko.applyBindings(model, document.getElementById('editor-bar'));
            }
        };

        var WxArticleEditor = function (options) {
            var self = this;
            var previewArticles = [];
            var covers = [];
            var titles = [];
            var footerTemplates = [];
            var bodyTemplates = [];

            var $title = $('#wx-article-title');
            var $cover = $('#wx-article-cover');
            var $body = $('#wx-article-body');
            var $footer = $('#wx-article-footer');

            var editorBar = null;

            this.titleId = options.title_id;

            this.coverId = options.cover_id;

            this.bodyTemplateId = options.body_template_id;

            this.footerTemplateId = options.footer_template_id;

            this.referralLinkId = options.referral_link_id;

            this.novelId = options.novel_id;

            this.categoryId = options.category_id;

            this.articleId = options.article_id;

            this.nextArticleId = options.next_article_id;

            this.init = function () {
                return $.when(
                        loadCovers(),
                        loadTitles(),
                        loadFooterTemplates(),
                        loadBodyTemplates(),
                        loadPreviewArticles()
                    )
                    .then(function () {
                        editorBar = new EditorBar({
                            editor: self,
                            is_novel_online: options.is_novel_online,
                            titles: titles,
                            covers: covers,
                            body_templates: _.map(bodyTemplates, function (it) {
                                return { id: it.id, preview_img: it.preview_img };
                            }),
                            footer_templates: _.map(footerTemplates, function (it) {
                                return { id: it.id, preview_img: it.preview_img };
                            })
                        });

                        editorBar.init();

                        if (self.titleId) {
                            self.changeTitle(self.titleId);
                        } else {
                            renderTitle(_.sample(titles));
                        }

                        if (self.coverId) {
                            self.changeCover(self.coverId);
                        } else {
                            renderCover(_.sample(covers));
                        }

                        if (self.bodyTemplateId) {
                            self.changeBodyTemplate(self.bodyTemplateId);
                        } else {
                            renderBody(_.sample(bodyTemplates));
                        }

                        if (self.footerTemplateId) {
                            self.changeFooterTemplate(self.footerTemplateId);
                        } else {
                            renderFooter(_.sample(footerTemplates));
                        }
                    });
            };

            this.changeTitle = function (id) {
                var title = _.find(titles, function (it) {
                    return it.id == id;
                });

                renderTitle(title);
            };

            this.changeCover = function (id) {
                var cover = _.find(covers, function (it) {
                    return it.id == id;
                });

                renderCover(cover);
            };

            this.changeBodyTemplate = function (id) {
                var template = _.find(bodyTemplates, function (it) {
                    return it.id == id;
                });

                renderBody(template);
            };

            this.changeFooterTemplate = function (id) {
                var template = _.find(footerTemplates, function (it) {
                    return it.id == id;
                });

                renderFooter(template);
            };

            function renderTitle(title) {
                if (!title) {
                    return false;
                }

                self.titleId = title.id;

                $title.html(title.title);
            }

            function renderCover(cover) {
                if (!cover) {
                    return false;
                }

                self.coverId = cover.id;

                $cover.html('<img style="width:100%;display:block;margin-bottom:20px;" src="' + cover.cover_url + '" />');
            }

            function renderBody(template) {
                if (!template) {
                    return false;
                }

                self.bodyTemplateId = template.id;

                if (!template.compiled_template) {
                    template.compiled_template = Handlebars.compile(template.template);
                }
				//	$a={ chapters: previewArticles };
                //console.log($a['chapters'][0]['paragraphs']);
                $body.html(template.compiled_template({ chapters: previewArticles }));
              
            }

            function renderFooter(template) {
                if (!template) {
                    return false;
                }

                self.footerTemplateId = template.id;

                $footer.html(template.template);
            }

            function loadPreviewArticles() {
                return $.get('/admin.php/Agent/Agent/getcontent/id/' + self.articleId, function (data) {
                    previewArticles = data;
                });
            }

            function loadCovers() {
                return $.get('/admin.php/Agent/Agent/getimage/id/' + self.categoryId, function (data) {
                    covers = data;
                });
            }

            function loadTitles() {
                return $.get('/admin.php/Agent/Agent/gettitle/id/' + self.categoryId, function (data) {
                    titles = data;
                });
            }

            function loadFooterTemplates() {
                return $.get('/admin.php/Agent/Agent/getfooter', function (data) {
                    footerTemplates = data;
                });
            }

            function loadBodyTemplates() {
                return $.get('/admin.php/Agent/Agent/gettemp', function (data) {
                    bodyTemplates = data;
                });
            }
          
         
        }
    </script>
</body>
</html>