<?php

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_97f0a5ab945b0bd7693ef18a44fa0cbcb6170ce3e7045e04480c7084039e1f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee0f3f8ab6b1ea33894a060e6eab0ed9342b16370814ffe1cb60476eb430fc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0f3f8ab6b1ea33894a060e6eab0ed9342b16370814ffe1cb60476eb430fc7e->enter($__internal_ee0f3f8ab6b1ea33894a060e6eab0ed9342b16370814ffe1cb60476eb430fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        $__internal_194c5041ef8f1590d221e6258106fd865c42c1ca0f6229dd892b0ce9c3c66215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194c5041ef8f1590d221e6258106fd865c42c1ca0f6229dd892b0ce9c3c66215->enter($__internal_194c5041ef8f1590d221e6258106fd865c42c1ca0f6229dd892b0ce9c3c66215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        // line 11
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (        $this->renderBlock("preview", $context, $blocks)) : (null));
        // line 12
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (        $this->renderBlock("form", $context, $blocks)) : (null));
        // line 13
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (        $this->renderBlock("show", $context, $blocks)) : (null));
        // line 14
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (        $this->renderBlock("list_table", $context, $blocks)) : (null));
        // line 15
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (        $this->renderBlock("list_filters", $context, $blocks)) : (null));
        // line 16
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (        $this->renderBlock("tab_menu", $context, $blocks)) : (null));
        // line 17
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (        $this->renderBlock("content", $context, $blocks)) : (null));
        // line 18
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : (null));
        // line 19
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (        $this->renderBlock("breadcrumb", $context, $blocks)) : (null));
        // line 20
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (        $this->renderBlock("actions", $context, $blocks)) : (null));
        // line 21
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (        $this->renderBlock("navbar_title", $context, $blocks)) : (null));
        // line 22
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (        $this->renderBlock("list_filters_actions", $context, $blocks)) : (null));
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
        ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>

    ";
        // line 353
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 360
            echo "    ";
        }
        // line 361
        echo "
    </body>
</html>
";
        
        $__internal_ee0f3f8ab6b1ea33894a060e6eab0ed9342b16370814ffe1cb60476eb430fc7e->leave($__internal_ee0f3f8ab6b1ea33894a060e6eab0ed9342b16370814ffe1cb60476eb430fc7e_prof);

        
        $__internal_194c5041ef8f1590d221e6258106fd865c42c1ca0f6229dd892b0ce9c3c66215->leave($__internal_194c5041ef8f1590d221e6258106fd865c42c1ca0f6229dd892b0ce9c3c66215_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_be2c3df46c4a1f7862961eb1c51cf59c90dd2bc3d8fbb6ae7eef822ca4148861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2c3df46c4a1f7862961eb1c51cf59c90dd2bc3d8fbb6ae7eef822ca4148861->enter($__internal_be2c3df46c4a1f7862961eb1c51cf59c90dd2bc3d8fbb6ae7eef822ca4148861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_7837b661388f1b30adfef3562770b680dce1704a6cec7ff345f26788af5019fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7837b661388f1b30adfef3562770b680dce1704a6cec7ff345f26788af5019fd->enter($__internal_7837b661388f1b30adfef3562770b680dce1704a6cec7ff345f26788af5019fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_7837b661388f1b30adfef3562770b680dce1704a6cec7ff345f26788af5019fd->leave($__internal_7837b661388f1b30adfef3562770b680dce1704a6cec7ff345f26788af5019fd_prof);

        
        $__internal_be2c3df46c4a1f7862961eb1c51cf59c90dd2bc3d8fbb6ae7eef822ca4148861->leave($__internal_be2c3df46c4a1f7862961eb1c51cf59c90dd2bc3d8fbb6ae7eef822ca4148861_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_ab697132371bbf52c9963d7ec1850689631882355a9d0d24a4e0757efe27cb12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab697132371bbf52c9963d7ec1850689631882355a9d0d24a4e0757efe27cb12->enter($__internal_ab697132371bbf52c9963d7ec1850689631882355a9d0d24a4e0757efe27cb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_263aca58cf2aac7fb824bd790ba2cafa2840c3f4b4f2ec277d9ef402a46d2273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263aca58cf2aac7fb824bd790ba2cafa2840c3f4b4f2ec277d9ef402a46d2273->enter($__internal_263aca58cf2aac7fb824bd790ba2cafa2840c3f4b4f2ec277d9ef402a46d2273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_263aca58cf2aac7fb824bd790ba2cafa2840c3f4b4f2ec277d9ef402a46d2273->leave($__internal_263aca58cf2aac7fb824bd790ba2cafa2840c3f4b4f2ec277d9ef402a46d2273_prof);

        
        $__internal_ab697132371bbf52c9963d7ec1850689631882355a9d0d24a4e0757efe27cb12->leave($__internal_ab697132371bbf52c9963d7ec1850689631882355a9d0d24a4e0757efe27cb12_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_364cb5784e971ee84f83f5cea710f3bc336a8ee6b500b141d86704e191ab7e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364cb5784e971ee84f83f5cea710f3bc336a8ee6b500b141d86704e191ab7e52->enter($__internal_364cb5784e971ee84f83f5cea710f3bc336a8ee6b500b141d86704e191ab7e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5aac18d654e3f1fa2c29e6bfa5e8e6e00e1191237502e28596c9867350dc713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5aac18d654e3f1fa2c29e6bfa5e8e6e00e1191237502e28596c9867350dc713->enter($__internal_f5aac18d654e3f1fa2c29e6bfa5e8e6e00e1191237502e28596c9867350dc713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_f5aac18d654e3f1fa2c29e6bfa5e8e6e00e1191237502e28596c9867350dc713->leave($__internal_f5aac18d654e3f1fa2c29e6bfa5e8e6e00e1191237502e28596c9867350dc713_prof);

        
        $__internal_364cb5784e971ee84f83f5cea710f3bc336a8ee6b500b141d86704e191ab7e52->leave($__internal_364cb5784e971ee84f83f5cea710f3bc336a8ee6b500b141d86704e191ab7e52_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e26399bb382e1d66fa4cf4d9448427af77127fcd8cf43eb5816762b334b4d4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26399bb382e1d66fa4cf4d9448427af77127fcd8cf43eb5816762b334b4d4c0->enter($__internal_e26399bb382e1d66fa4cf4d9448427af77127fcd8cf43eb5816762b334b4d4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_70ac34795c9a355ee11e878ced771e960b0696bd787f6cc5b27ca1402a879c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ac34795c9a355ee11e878ced771e960b0696bd787f6cc5b27ca1402a879c25->enter($__internal_70ac34795c9a355ee11e878ced771e960b0696bd787f6cc5b27ca1402a879c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_70ac34795c9a355ee11e878ced771e960b0696bd787f6cc5b27ca1402a879c25->leave($__internal_70ac34795c9a355ee11e878ced771e960b0696bd787f6cc5b27ca1402a879c25_prof);

        
        $__internal_e26399bb382e1d66fa4cf4d9448427af77127fcd8cf43eb5816762b334b4d4c0->leave($__internal_e26399bb382e1d66fa4cf4d9448427af77127fcd8cf43eb5816762b334b4d4c0_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_bbef7887bb350b8554b633c6bc6c4a201cde43d0816a10ec00094a8d77238fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbef7887bb350b8554b633c6bc6c4a201cde43d0816a10ec00094a8d77238fd7->enter($__internal_bbef7887bb350b8554b633c6bc6c4a201cde43d0816a10ec00094a8d77238fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_9a38855ae3e3f1a0204f8cdd716ce50d28d24ee6afe9bb5ef95fe9a461a873eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a38855ae3e3f1a0204f8cdd716ce50d28d24ee6afe9bb5ef95fe9a461a873eb->enter($__internal_9a38855ae3e3f1a0204f8cdd716ce50d28d24ee6afe9bb5ef95fe9a461a873eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_9a38855ae3e3f1a0204f8cdd716ce50d28d24ee6afe9bb5ef95fe9a461a873eb->leave($__internal_9a38855ae3e3f1a0204f8cdd716ce50d28d24ee6afe9bb5ef95fe9a461a873eb_prof);

        
        $__internal_bbef7887bb350b8554b633c6bc6c4a201cde43d0816a10ec00094a8d77238fd7->leave($__internal_bbef7887bb350b8554b633c6bc6c4a201cde43d0816a10ec00094a8d77238fd7_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_2735cef4a6114765b1e89278f7ebd67f47d372c4faca1f28b14476e1823a6e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2735cef4a6114765b1e89278f7ebd67f47d372c4faca1f28b14476e1823a6e0b->enter($__internal_2735cef4a6114765b1e89278f7ebd67f47d372c4faca1f28b14476e1823a6e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_4a149928a1dadb1f16570e1adbd18c067cb076af9f1fb834c3e4f8db9be2a2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a149928a1dadb1f16570e1adbd18c067cb076af9f1fb834c3e4f8db9be2a2dc->enter($__internal_4a149928a1dadb1f16570e1adbd18c067cb076af9f1fb834c3e4f8db9be2a2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        
        $__internal_4a149928a1dadb1f16570e1adbd18c067cb076af9f1fb834c3e4f8db9be2a2dc->leave($__internal_4a149928a1dadb1f16570e1adbd18c067cb076af9f1fb834c3e4f8db9be2a2dc_prof);

        
        $__internal_2735cef4a6114765b1e89278f7ebd67f47d372c4faca1f28b14476e1823a6e0b->leave($__internal_2735cef4a6114765b1e89278f7ebd67f47d372c4faca1f28b14476e1823a6e0b_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_505b85bd7849c00b0dba579efc95e7a214bdfdad1c267902e6b9b377ab90a2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505b85bd7849c00b0dba579efc95e7a214bdfdad1c267902e6b9b377ab90a2f8->enter($__internal_505b85bd7849c00b0dba579efc95e7a214bdfdad1c267902e6b9b377ab90a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_73694b9bd9d96b8a97128bb5f08928a365e6b52d9b2bedaf42a15bb85a2ae2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73694b9bd9d96b8a97128bb5f08928a365e6b52d9b2bedaf42a15bb85a2ae2b3->enter($__internal_73694b9bd9d96b8a97128bb5f08928a365e6b52d9b2bedaf42a15bb85a2ae2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_73694b9bd9d96b8a97128bb5f08928a365e6b52d9b2bedaf42a15bb85a2ae2b3->leave($__internal_73694b9bd9d96b8a97128bb5f08928a365e6b52d9b2bedaf42a15bb85a2ae2b3_prof);

        
        $__internal_505b85bd7849c00b0dba579efc95e7a214bdfdad1c267902e6b9b377ab90a2f8->leave($__internal_505b85bd7849c00b0dba579efc95e7a214bdfdad1c267902e6b9b377ab90a2f8_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_11d70060feb35792bcb26b2493b5a7e44b86cf5abef0635ba34647fc20dab1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d70060feb35792bcb26b2493b5a7e44b86cf5abef0635ba34647fc20dab1c9->enter($__internal_11d70060feb35792bcb26b2493b5a7e44b86cf5abef0635ba34647fc20dab1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_93f250800f28b4215efdd883668bc26a18f725d8e537cb6b1899d884b18a2ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f250800f28b4215efdd883668bc26a18f725d8e537cb6b1899d884b18a2ca5->enter($__internal_93f250800f28b4215efdd883668bc26a18f725d8e537cb6b1899d884b18a2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_93f250800f28b4215efdd883668bc26a18f725d8e537cb6b1899d884b18a2ca5->leave($__internal_93f250800f28b4215efdd883668bc26a18f725d8e537cb6b1899d884b18a2ca5_prof);

        
        $__internal_11d70060feb35792bcb26b2493b5a7e44b86cf5abef0635ba34647fc20dab1c9->leave($__internal_11d70060feb35792bcb26b2493b5a7e44b86cf5abef0635ba34647fc20dab1c9_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_7336a6b2d876b3c187d221c4d4c2e85344bfa230008bb5eaed8d97c131aae956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7336a6b2d876b3c187d221c4d4c2e85344bfa230008bb5eaed8d97c131aae956->enter($__internal_7336a6b2d876b3c187d221c4d4c2e85344bfa230008bb5eaed8d97c131aae956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_cbdff42f240ea468acaabd51509e85c49db4f1a90d27a9454778a42470dce14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdff42f240ea468acaabd51509e85c49db4f1a90d27a9454778a42470dce14b->enter($__internal_cbdff42f240ea468acaabd51509e85c49db4f1a90d27a9454778a42470dce14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 118
        echo "            <header class=\"main-header\">
                ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>
        ";
        
        $__internal_cbdff42f240ea468acaabd51509e85c49db4f1a90d27a9454778a42470dce14b->leave($__internal_cbdff42f240ea468acaabd51509e85c49db4f1a90d27a9454778a42470dce14b_prof);

        
        $__internal_7336a6b2d876b3c187d221c4d4c2e85344bfa230008bb5eaed8d97c131aae956->leave($__internal_7336a6b2d876b3c187d221c4d4c2e85344bfa230008bb5eaed8d97c131aae956_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_b8467837eea1022bf25923ca8069b888de3c392bcb6fd8dfcdb7a75cd1cd4171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8467837eea1022bf25923ca8069b888de3c392bcb6fd8dfcdb7a75cd1cd4171->enter($__internal_b8467837eea1022bf25923ca8069b888de3c392bcb6fd8dfcdb7a75cd1cd4171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_70c78ff3618bdcb9f8f457b85ba69faa8f8ad656f1b2ec3433421d8d5df6ef52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c78ff3618bdcb9f8f457b85ba69faa8f8ad656f1b2ec3433421d8d5df6ef52->enter($__internal_70c78ff3618bdcb9f8f457b85ba69faa8f8ad656f1b2ec3433421d8d5df6ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_70c78ff3618bdcb9f8f457b85ba69faa8f8ad656f1b2ec3433421d8d5df6ef52->leave($__internal_70c78ff3618bdcb9f8f457b85ba69faa8f8ad656f1b2ec3433421d8d5df6ef52_prof);

        
        $__internal_b8467837eea1022bf25923ca8069b888de3c392bcb6fd8dfcdb7a75cd1cd4171->leave($__internal_b8467837eea1022bf25923ca8069b888de3c392bcb6fd8dfcdb7a75cd1cd4171_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_775c150e62b2919468cff35f5708cd5a91f19874a49c2fe09d1158144bc9509e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775c150e62b2919468cff35f5708cd5a91f19874a49c2fe09d1158144bc9509e->enter($__internal_775c150e62b2919468cff35f5708cd5a91f19874a49c2fe09d1158144bc9509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_95b8c8396d7c2cc44f325fd92702d7079ae8418217f86121bd96c1a5909d508e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b8c8396d7c2cc44f325fd92702d7079ae8418217f86121bd96c1a5909d508e->enter($__internal_95b8c8396d7c2cc44f325fd92702d7079ae8418217f86121bd96c1a5909d508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_95b8c8396d7c2cc44f325fd92702d7079ae8418217f86121bd96c1a5909d508e->leave($__internal_95b8c8396d7c2cc44f325fd92702d7079ae8418217f86121bd96c1a5909d508e_prof);

        
        $__internal_775c150e62b2919468cff35f5708cd5a91f19874a49c2fe09d1158144bc9509e->leave($__internal_775c150e62b2919468cff35f5708cd5a91f19874a49c2fe09d1158144bc9509e_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_39aa2ca6024f9ebb4f4f5ab3abb1dad46f28a3631a60c34f0c65db713896c95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39aa2ca6024f9ebb4f4f5ab3abb1dad46f28a3631a60c34f0c65db713896c95f->enter($__internal_39aa2ca6024f9ebb4f4f5ab3abb1dad46f28a3631a60c34f0c65db713896c95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_f97efe3517facff07fe099157258a0679a75c01e8853cdd8adb81b593d25cffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97efe3517facff07fe099157258a0679a75c01e8853cdd8adb81b593d25cffa->enter($__internal_f97efe3517facff07fe099157258a0679a75c01e8853cdd8adb81b593d25cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>
                ";
        
        $__internal_f97efe3517facff07fe099157258a0679a75c01e8853cdd8adb81b593d25cffa->leave($__internal_f97efe3517facff07fe099157258a0679a75c01e8853cdd8adb81b593d25cffa_prof);

        
        $__internal_39aa2ca6024f9ebb4f4f5ab3abb1dad46f28a3631a60c34f0c65db713896c95f->leave($__internal_39aa2ca6024f9ebb4f4f5ab3abb1dad46f28a3631a60c34f0c65db713896c95f_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_94d5d8f5865e39c23ab27348fdfc15adc873ee8a35d2b3b1656f3ff45d69f082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d5d8f5865e39c23ab27348fdfc15adc873ee8a35d2b3b1656f3ff45d69f082->enter($__internal_94d5d8f5865e39c23ab27348fdfc15adc873ee8a35d2b3b1656f3ff45d69f082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_0a35212e9c9272df90c1aa30dc0e0ee425c9de642444078b71eea167f8c31525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a35212e9c9272df90c1aa30dc0e0ee425c9de642444078b71eea167f8c31525->enter($__internal_0a35212e9c9272df90c1aa30dc0e0ee425c9de642444078b71eea167f8c31525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>
                                                                ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_0a35212e9c9272df90c1aa30dc0e0ee425c9de642444078b71eea167f8c31525->leave($__internal_0a35212e9c9272df90c1aa30dc0e0ee425c9de642444078b71eea167f8c31525_prof);

        
        $__internal_94d5d8f5865e39c23ab27348fdfc15adc873ee8a35d2b3b1656f3ff45d69f082->leave($__internal_94d5d8f5865e39c23ab27348fdfc15adc873ee8a35d2b3b1656f3ff45d69f082_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_e81bb1197e3615fad4e3ab3b423ffbab29ff12eddaa6f45388d45a2d2b2e8ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81bb1197e3615fad4e3ab3b423ffbab29ff12eddaa6f45388d45a2d2b2e8ffe->enter($__internal_e81bb1197e3615fad4e3ab3b423ffbab29ff12eddaa6f45388d45a2d2b2e8ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_af022b54596c02176bac74688c3fffe6da8cfd403dc3fefecac1ae8b837b8d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af022b54596c02176bac74688c3fffe6da8cfd403dc3fefecac1ae8b837b8d23->enter($__internal_af022b54596c02176bac74688c3fffe6da8cfd403dc3fefecac1ae8b837b8d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 211
        echo "                        ";
        
        $__internal_af022b54596c02176bac74688c3fffe6da8cfd403dc3fefecac1ae8b837b8d23->leave($__internal_af022b54596c02176bac74688c3fffe6da8cfd403dc3fefecac1ae8b837b8d23_prof);

        
        $__internal_e81bb1197e3615fad4e3ab3b423ffbab29ff12eddaa6f45388d45a2d2b2e8ffe->leave($__internal_e81bb1197e3615fad4e3ab3b423ffbab29ff12eddaa6f45388d45a2d2b2e8ffe_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_bb894e624b8e1d5a40202d57a46d73d21a1e74ed2f50b80b2c0eb25b3e4361ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb894e624b8e1d5a40202d57a46d73d21a1e74ed2f50b80b2c0eb25b3e4361ae->enter($__internal_bb894e624b8e1d5a40202d57a46d73d21a1e74ed2f50b80b2c0eb25b3e4361ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_360ae3bc4f43b9f6f9cd6abae960cf327de1d8b885efd7f988d510f917b1a436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360ae3bc4f43b9f6f9cd6abae960cf327de1d8b885efd7f988d510f917b1a436->enter($__internal_360ae3bc4f43b9f6f9cd6abae960cf327de1d8b885efd7f988d510f917b1a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_360ae3bc4f43b9f6f9cd6abae960cf327de1d8b885efd7f988d510f917b1a436->leave($__internal_360ae3bc4f43b9f6f9cd6abae960cf327de1d8b885efd7f988d510f917b1a436_prof);

        
        $__internal_bb894e624b8e1d5a40202d57a46d73d21a1e74ed2f50b80b2c0eb25b3e4361ae->leave($__internal_bb894e624b8e1d5a40202d57a46d73d21a1e74ed2f50b80b2c0eb25b3e4361ae_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_1c4114e749fd597a3065069eacd3f88d819678e67c952df6ec92a269e3ea5c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4114e749fd597a3065069eacd3f88d819678e67c952df6ec92a269e3ea5c30->enter($__internal_1c4114e749fd597a3065069eacd3f88d819678e67c952df6ec92a269e3ea5c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_edeaf964f90c4e24bdc91e1e21a1bed523d9d8c4ea9ac82fb7bfe6445006dac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edeaf964f90c4e24bdc91e1e21a1bed523d9d8c4ea9ac82fb7bfe6445006dac4->enter($__internal_edeaf964f90c4e24bdc91e1e21a1bed523d9d8c4ea9ac82fb7bfe6445006dac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_edeaf964f90c4e24bdc91e1e21a1bed523d9d8c4ea9ac82fb7bfe6445006dac4->leave($__internal_edeaf964f90c4e24bdc91e1e21a1bed523d9d8c4ea9ac82fb7bfe6445006dac4_prof);

        
        $__internal_1c4114e749fd597a3065069eacd3f88d819678e67c952df6ec92a269e3ea5c30->leave($__internal_1c4114e749fd597a3065069eacd3f88d819678e67c952df6ec92a269e3ea5c30_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a50b55227be4314d1c6b29257663c28ff43c8010b6a7c99d96b38b3a4a62a459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50b55227be4314d1c6b29257663c28ff43c8010b6a7c99d96b38b3a4a62a459->enter($__internal_a50b55227be4314d1c6b29257663c28ff43c8010b6a7c99d96b38b3a4a62a459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_65be671c30f47925fc78646d4f01124cd9fd3d4c4f68cb4dc63a5950050469f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65be671c30f47925fc78646d4f01124cd9fd3d4c4f68cb4dc63a5950050469f4->enter($__internal_65be671c30f47925fc78646d4f01124cd9fd3d4c4f68cb4dc63a5950050469f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 218
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>
        ";
        
        $__internal_65be671c30f47925fc78646d4f01124cd9fd3d4c4f68cb4dc63a5950050469f4->leave($__internal_65be671c30f47925fc78646d4f01124cd9fd3d4c4f68cb4dc63a5950050469f4_prof);

        
        $__internal_a50b55227be4314d1c6b29257663c28ff43c8010b6a7c99d96b38b3a4a62a459->leave($__internal_a50b55227be4314d1c6b29257663c28ff43c8010b6a7c99d96b38b3a4a62a459_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4dcdcd0f15717b4428c23e876df47cd6ff144532d21edb7be873467d75394de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcdcd0f15717b4428c23e876df47cd6ff144532d21edb7be873467d75394de8->enter($__internal_4dcdcd0f15717b4428c23e876df47cd6ff144532d21edb7be873467d75394de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_bf074384cca72d1f3e5b208e3b102bc7866283587d1645c5ccade1a3dc1c17d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf074384cca72d1f3e5b208e3b102bc7866283587d1645c5ccade1a3dc1c17d5->enter($__internal_bf074384cca72d1f3e5b208e3b102bc7866283587d1645c5ccade1a3dc1c17d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>
            ";
        
        $__internal_bf074384cca72d1f3e5b208e3b102bc7866283587d1645c5ccade1a3dc1c17d5->leave($__internal_bf074384cca72d1f3e5b208e3b102bc7866283587d1645c5ccade1a3dc1c17d5_prof);

        
        $__internal_4dcdcd0f15717b4428c23e876df47cd6ff144532d21edb7be873467d75394de8->leave($__internal_4dcdcd0f15717b4428c23e876df47cd6ff144532d21edb7be873467d75394de8_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_dfb5c4296eb69333e5d49bd1b9db5ba3c9cb5b1c5164856be10a4e337e5be477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb5c4296eb69333e5d49bd1b9db5ba3c9cb5b1c5164856be10a4e337e5be477->enter($__internal_dfb5c4296eb69333e5d49bd1b9db5ba3c9cb5b1c5164856be10a4e337e5be477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_64709e3759a6f40cf17ca033bbe69be4fbdfa336a7980f32543b177034c71784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64709e3759a6f40cf17ca033bbe69be4fbdfa336a7980f32543b177034c71784->enter($__internal_64709e3759a6f40cf17ca033bbe69be4fbdfa336a7980f32543b177034c71784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 222
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 234
        echo "
                            ";
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                        ";
        
        $__internal_64709e3759a6f40cf17ca033bbe69be4fbdfa336a7980f32543b177034c71784->leave($__internal_64709e3759a6f40cf17ca033bbe69be4fbdfa336a7980f32543b177034c71784_prof);

        
        $__internal_dfb5c4296eb69333e5d49bd1b9db5ba3c9cb5b1c5164856be10a4e337e5be477->leave($__internal_dfb5c4296eb69333e5d49bd1b9db5ba3c9cb5b1c5164856be10a4e337e5be477_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_045a18275744ef7bd89dda4b57f6668521162ae83a600a019f6a67b5b0379dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045a18275744ef7bd89dda4b57f6668521162ae83a600a019f6a67b5b0379dea->enter($__internal_045a18275744ef7bd89dda4b57f6668521162ae83a600a019f6a67b5b0379dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_97d12bf72aef2165ca2feb60756248187747a168bf5bbcbadbadaaaf02486e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d12bf72aef2165ca2feb60756248187747a168bf5bbcbadbadaaaf02486e0a->enter($__internal_97d12bf72aef2165ca2feb60756248187747a168bf5bbcbadbadaaaf02486e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_97d12bf72aef2165ca2feb60756248187747a168bf5bbcbadbadaaaf02486e0a->leave($__internal_97d12bf72aef2165ca2feb60756248187747a168bf5bbcbadbadaaaf02486e0a_prof);

        
        $__internal_045a18275744ef7bd89dda4b57f6668521162ae83a600a019f6a67b5b0379dea->leave($__internal_045a18275744ef7bd89dda4b57f6668521162ae83a600a019f6a67b5b0379dea_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_6297b84abb59836997527e7be5cac3fc7e2fb60da8d3b0f0ecdb23dd65102c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6297b84abb59836997527e7be5cac3fc7e2fb60da8d3b0f0ecdb23dd65102c7e->enter($__internal_6297b84abb59836997527e7be5cac3fc7e2fb60da8d3b0f0ecdb23dd65102c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_3481d6e5d924e8d28d5abf5ce86d5e43c77db7a09496d2fc94486794fa9e5408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3481d6e5d924e8d28d5abf5ce86d5e43c77db7a09496d2fc94486794fa9e5408->enter($__internal_3481d6e5d924e8d28d5abf5ce86d5e43c77db7a09496d2fc94486794fa9e5408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_3481d6e5d924e8d28d5abf5ce86d5e43c77db7a09496d2fc94486794fa9e5408->leave($__internal_3481d6e5d924e8d28d5abf5ce86d5e43c77db7a09496d2fc94486794fa9e5408_prof);

        
        $__internal_6297b84abb59836997527e7be5cac3fc7e2fb60da8d3b0f0ecdb23dd65102c7e->leave($__internal_6297b84abb59836997527e7be5cac3fc7e2fb60da8d3b0f0ecdb23dd65102c7e_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_db21fa68c0f4f71d96cb792a4ac9d3088edbe14c94bfa581fdc35fee91520fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db21fa68c0f4f71d96cb792a4ac9d3088edbe14c94bfa581fdc35fee91520fae->enter($__internal_db21fa68c0f4f71d96cb792a4ac9d3088edbe14c94bfa581fdc35fee91520fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_43f110a43749506fee5d01a9a69a8861b93b8fa872d5a9807542a062d109aaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f110a43749506fee5d01a9a69a8861b93b8fa872d5a9807542a062d109aaf5->enter($__internal_43f110a43749506fee5d01a9a69a8861b93b8fa872d5a9807542a062d109aaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_43f110a43749506fee5d01a9a69a8861b93b8fa872d5a9807542a062d109aaf5->leave($__internal_43f110a43749506fee5d01a9a69a8861b93b8fa872d5a9807542a062d109aaf5_prof);

        
        $__internal_db21fa68c0f4f71d96cb792a4ac9d3088edbe14c94bfa581fdc35fee91520fae->leave($__internal_db21fa68c0f4f71d96cb792a4ac9d3088edbe14c94bfa581fdc35fee91520fae_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_cc55dda877afa2ce7a99c73189c2dab5e43d12e0f21fe3d9193207c5883cde92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc55dda877afa2ce7a99c73189c2dab5e43d12e0f21fe3d9193207c5883cde92->enter($__internal_cc55dda877afa2ce7a99c73189c2dab5e43d12e0f21fe3d9193207c5883cde92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_c0e8f9303c561730ecefecbfbf91082cf5933b3f2c26229a242b493c44ee0917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e8f9303c561730ecefecbfbf91082cf5933b3f2c26229a242b493c44ee0917->enter($__internal_c0e8f9303c561730ecefecbfbf91082cf5933b3f2c26229a242b493c44ee0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_c0e8f9303c561730ecefecbfbf91082cf5933b3f2c26229a242b493c44ee0917->leave($__internal_c0e8f9303c561730ecefecbfbf91082cf5933b3f2c26229a242b493c44ee0917_prof);

        
        $__internal_cc55dda877afa2ce7a99c73189c2dab5e43d12e0f21fe3d9193207c5883cde92->leave($__internal_cc55dda877afa2ce7a99c73189c2dab5e43d12e0f21fe3d9193207c5883cde92_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_a36580a59473d1f6634c87591cf20436baabad99585f0e77b037b0e792b0161d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36580a59473d1f6634c87591cf20436baabad99585f0e77b037b0e792b0161d->enter($__internal_a36580a59473d1f6634c87591cf20436baabad99585f0e77b037b0e792b0161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_10044d6aae7ccd5f8e7a55af8c96a9f1227eaa3b7f3f43e2f4b5c4f90ce2dc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10044d6aae7ccd5f8e7a55af8c96a9f1227eaa3b7f3f43e2f4b5c4f90ce2dc2c->enter($__internal_10044d6aae7ccd5f8e7a55af8c96a9f1227eaa3b7f3f43e2f4b5c4f90ce2dc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_10044d6aae7ccd5f8e7a55af8c96a9f1227eaa3b7f3f43e2f4b5c4f90ce2dc2c->leave($__internal_10044d6aae7ccd5f8e7a55af8c96a9f1227eaa3b7f3f43e2f4b5c4f90ce2dc2c_prof);

        
        $__internal_a36580a59473d1f6634c87591cf20436baabad99585f0e77b037b0e792b0161d->leave($__internal_a36580a59473d1f6634c87591cf20436baabad99585f0e77b037b0e792b0161d_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_ff2451f7e75ba6e84bfe21bff46d721179ea7e6c5052a8e31d95ba93bdcb5e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2451f7e75ba6e84bfe21bff46d721179ea7e6c5052a8e31d95ba93bdcb5e89->enter($__internal_ff2451f7e75ba6e84bfe21bff46d721179ea7e6c5052a8e31d95ba93bdcb5e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_9654257329b1868bcdb9f27bf228e648723881e5d0ad2b3a466e78151a03408d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9654257329b1868bcdb9f27bf228e648723881e5d0ad2b3a466e78151a03408d->enter($__internal_9654257329b1868bcdb9f27bf228e648723881e5d0ad2b3a466e78151a03408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                    <section class=\"content-header\">

                        ";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>
                ";
        
        $__internal_9654257329b1868bcdb9f27bf228e648723881e5d0ad2b3a466e78151a03408d->leave($__internal_9654257329b1868bcdb9f27bf228e648723881e5d0ad2b3a466e78151a03408d_prof);

        
        $__internal_ff2451f7e75ba6e84bfe21bff46d721179ea7e6c5052a8e31d95ba93bdcb5e89->leave($__internal_ff2451f7e75ba6e84bfe21bff46d721179ea7e6c5052a8e31d95ba93bdcb5e89_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_ddb3102581ea70430268a685fc363581daf3310fed968a5b3f4c59ad92b9ce16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb3102581ea70430268a685fc363581daf3310fed968a5b3f4c59ad92b9ce16->enter($__internal_ddb3102581ea70430268a685fc363581daf3310fed968a5b3f4c59ad92b9ce16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_788c27ccad6ca311f1635724dea84bac226a8ede82ffb1a5435685fcba2bfa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788c27ccad6ca311f1635724dea84bac226a8ede82ffb1a5435685fcba2bfa8d->enter($__internal_788c27ccad6ca311f1635724dea84bac226a8ede82ffb1a5435685fcba2bfa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_788c27ccad6ca311f1635724dea84bac226a8ede82ffb1a5435685fcba2bfa8d->leave($__internal_788c27ccad6ca311f1635724dea84bac226a8ede82ffb1a5435685fcba2bfa8d_prof);

        
        $__internal_ddb3102581ea70430268a685fc363581daf3310fed968a5b3f4c59ad92b9ce16->leave($__internal_ddb3102581ea70430268a685fc363581daf3310fed968a5b3f4c59ad92b9ce16_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_b72b9a59af784caeb0a9713db3118468534f220835dee6e2da02adaecb7fe6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72b9a59af784caeb0a9713db3118468534f220835dee6e2da02adaecb7fe6cc->enter($__internal_b72b9a59af784caeb0a9713db3118468534f220835dee6e2da02adaecb7fe6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_492a37d3cbdc55e41b08db91d0de8d3148509c4534ec671f25d00a55a06a0986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492a37d3cbdc55e41b08db91d0de8d3148509c4534ec671f25d00a55a06a0986->enter($__internal_492a37d3cbdc55e41b08db91d0de8d3148509c4534ec671f25d00a55a06a0986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                                                    </div>
                                                ";
            }
            // line 282
            echo "
                                                ";
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 299
            echo "
                                                ";
            // line 300
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 307
        echo "                            ";
        
        $__internal_492a37d3cbdc55e41b08db91d0de8d3148509c4534ec671f25d00a55a06a0986->leave($__internal_492a37d3cbdc55e41b08db91d0de8d3148509c4534ec671f25d00a55a06a0986_prof);

        
        $__internal_b72b9a59af784caeb0a9713db3118468534f220835dee6e2da02adaecb7fe6cc->leave($__internal_b72b9a59af784caeb0a9713db3118468534f220835dee6e2da02adaecb7fe6cc_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_2cab911e4d8086872d9ad97526856c786c43ae2afcf1f2fc93274ac0ffa7022f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cab911e4d8086872d9ad97526856c786c43ae2afcf1f2fc93274ac0ffa7022f->enter($__internal_2cab911e4d8086872d9ad97526856c786c43ae2afcf1f2fc93274ac0ffa7022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_183a6b90cc2cdb5a9c9174c7abf170ba3f8fc51e2363af72e4b29076ae96b81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183a6b90cc2cdb5a9c9174c7abf170ba3f8fc51e2363af72e4b29076ae96b81f->enter($__internal_183a6b90cc2cdb5a9c9174c7abf170ba3f8fc51e2363af72e4b29076ae96b81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_183a6b90cc2cdb5a9c9174c7abf170ba3f8fc51e2363af72e4b29076ae96b81f->leave($__internal_183a6b90cc2cdb5a9c9174c7abf170ba3f8fc51e2363af72e4b29076ae96b81f_prof);

        
        $__internal_2cab911e4d8086872d9ad97526856c786c43ae2afcf1f2fc93274ac0ffa7022f->leave($__internal_2cab911e4d8086872d9ad97526856c786c43ae2afcf1f2fc93274ac0ffa7022f_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_8d2245f0e5cadfd01d390d6e958085bba1a688b9656f45f8cf85ee1c1b6d0b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2245f0e5cadfd01d390d6e958085bba1a688b9656f45f8cf85ee1c1b6d0b5e->enter($__internal_8d2245f0e5cadfd01d390d6e958085bba1a688b9656f45f8cf85ee1c1b6d0b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_4a267fe65df3881e0dc562fce87b4a6310f09090d44a09ef44419c9d2c491d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a267fe65df3881e0dc562fce87b4a6310f09090d44a09ef44419c9d2c491d2a->enter($__internal_4a267fe65df3881e0dc562fce87b4a6310f09090d44a09ef44419c9d2c491d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_4a267fe65df3881e0dc562fce87b4a6310f09090d44a09ef44419c9d2c491d2a->leave($__internal_4a267fe65df3881e0dc562fce87b4a6310f09090d44a09ef44419c9d2c491d2a_prof);

        
        $__internal_8d2245f0e5cadfd01d390d6e958085bba1a688b9656f45f8cf85ee1c1b6d0b5e->leave($__internal_8d2245f0e5cadfd01d390d6e958085bba1a688b9656f45f8cf85ee1c1b6d0b5e_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_5678d42709c4279d064f7a7ad3f142fef958d7a45bdfe23e68888de14de606ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5678d42709c4279d064f7a7ad3f142fef958d7a45bdfe23e68888de14de606ff->enter($__internal_5678d42709c4279d064f7a7ad3f142fef958d7a45bdfe23e68888de14de606ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_d5097d32d29a8f4e249966a35b1305537e49f1af3a75864cbf18cc242af22308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5097d32d29a8f4e249966a35b1305537e49f1af3a75864cbf18cc242af22308->enter($__internal_d5097d32d29a8f4e249966a35b1305537e49f1af3a75864cbf18cc242af22308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (trim(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_d5097d32d29a8f4e249966a35b1305537e49f1af3a75864cbf18cc242af22308->leave($__internal_d5097d32d29a8f4e249966a35b1305537e49f1af3a75864cbf18cc242af22308_prof);

        
        $__internal_5678d42709c4279d064f7a7ad3f142fef958d7a45bdfe23e68888de14de606ff->leave($__internal_5678d42709c4279d064f7a7ad3f142fef958d7a45bdfe23e68888de14de606ff_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_a7381e328e9645ab778a3daae4b31ffd87c5673fc313b0e7702e5c1b58701f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7381e328e9645ab778a3daae4b31ffd87c5673fc313b0e7702e5c1b58701f88->enter($__internal_a7381e328e9645ab778a3daae4b31ffd87c5673fc313b0e7702e5c1b58701f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_42f117325b9b60fdab4ce94cb25a9e174bd7358f8c7d8fbbd87ba5f00ddcf405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f117325b9b60fdab4ce94cb25a9e174bd7358f8c7d8fbbd87ba5f00ddcf405->enter($__internal_42f117325b9b60fdab4ce94cb25a9e174bd7358f8c7d8fbbd87ba5f00ddcf405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataAdmin/standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_42f117325b9b60fdab4ce94cb25a9e174bd7358f8c7d8fbbd87ba5f00ddcf405->leave($__internal_42f117325b9b60fdab4ce94cb25a9e174bd7358f8c7d8fbbd87ba5f00ddcf405_prof);

        
        $__internal_a7381e328e9645ab778a3daae4b31ffd87c5673fc313b0e7702e5c1b58701f88->leave($__internal_a7381e328e9645ab778a3daae4b31ffd87c5673fc313b0e7702e5c1b58701f88_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_b28de413d9a092e6d91f1f3cf38c6a14e7adbe38f39c837cf233d9a0c872b10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28de413d9a092e6d91f1f3cf38c6a14e7adbe38f39c837cf233d9a0c872b10a->enter($__internal_b28de413d9a092e6d91f1f3cf38c6a14e7adbe38f39c837cf233d9a0c872b10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_e5bf04a5fb32236da60eec1f33fd3ac4fbf604c35e57e154c3ebab7f6686df76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bf04a5fb32236da60eec1f33fd3ac4fbf604c35e57e154c3ebab7f6686df76->enter($__internal_e5bf04a5fb32236da60eec1f33fd3ac4fbf604c35e57e154c3ebab7f6686df76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_e5bf04a5fb32236da60eec1f33fd3ac4fbf604c35e57e154c3ebab7f6686df76->leave($__internal_e5bf04a5fb32236da60eec1f33fd3ac4fbf604c35e57e154c3ebab7f6686df76_prof);

        
        $__internal_b28de413d9a092e6d91f1f3cf38c6a14e7adbe38f39c837cf233d9a0c872b10a->leave($__internal_b28de413d9a092e6d91f1f3cf38c6a14e7adbe38f39c837cf233d9a0c872b10a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1452 => 356,  1450 => 355,  1441 => 354,  1431 => 316,  1428 => 315,  1419 => 314,  1409 => 346,  1402 => 342,  1398 => 340,  1392 => 337,  1389 => 336,  1386 => 335,  1384 => 334,  1381 => 333,  1375 => 331,  1373 => 330,  1370 => 329,  1364 => 327,  1362 => 326,  1359 => 325,  1353 => 323,  1351 => 322,  1348 => 321,  1342 => 319,  1340 => 318,  1337 => 317,  1335 => 314,  1332 => 313,  1323 => 312,  1313 => 298,  1309 => 296,  1303 => 294,  1296 => 290,  1291 => 288,  1288 => 287,  1286 => 286,  1283 => 285,  1280 => 284,  1271 => 283,  1261 => 266,  1255 => 263,  1252 => 262,  1249 => 261,  1240 => 260,  1230 => 307,  1224 => 303,  1218 => 301,  1216 => 300,  1213 => 299,  1211 => 283,  1208 => 282,  1204 => 280,  1189 => 278,  1185 => 277,  1182 => 276,  1180 => 275,  1176 => 273,  1170 => 271,  1168 => 270,  1163 => 267,  1161 => 260,  1157 => 258,  1154 => 257,  1145 => 256,  1135 => 308,  1132 => 256,  1123 => 255,  1112 => 347,  1110 => 312,  1105 => 309,  1103 => 255,  1099 => 253,  1090 => 252,  1079 => 242,  1070 => 241,  1059 => 244,  1057 => 241,  1054 => 240,  1045 => 239,  1032 => 237,  1023 => 236,  1005 => 235,  984 => 225,  978 => 223,  969 => 222,  959 => 246,  956 => 239,  953 => 236,  951 => 235,  948 => 234,  945 => 222,  936 => 221,  924 => 247,  922 => 221,  918 => 219,  909 => 218,  898 => 349,  896 => 252,  892 => 250,  889 => 218,  880 => 217,  868 => 205,  866 => 204,  859 => 199,  850 => 198,  839 => 196,  837 => 195,  831 => 191,  822 => 190,  812 => 211,  807 => 208,  804 => 198,  802 => 190,  798 => 188,  795 => 187,  786 => 186,  775 => 182,  771 => 180,  765 => 178,  762 => 177,  759 => 176,  745 => 175,  739 => 173,  735 => 171,  729 => 169,  725 => 167,  722 => 165,  719 => 163,  717 => 162,  712 => 161,  710 => 160,  707 => 159,  705 => 158,  702 => 155,  700 => 154,  698 => 153,  696 => 152,  678 => 151,  675 => 150,  673 => 149,  670 => 148,  668 => 147,  665 => 146,  656 => 145,  645 => 212,  643 => 186,  639 => 184,  637 => 145,  629 => 139,  620 => 138,  610 => 137,  606 => 135,  600 => 133,  597 => 132,  589 => 130,  587 => 129,  582 => 128,  579 => 127,  570 => 126,  556 => 122,  552 => 120,  543 => 119,  532 => 214,  529 => 138,  526 => 126,  524 => 119,  521 => 118,  512 => 117,  494 => 113,  484 => 110,  481 => 109,  478 => 108,  464 => 107,  459 => 105,  456 => 102,  454 => 101,  452 => 100,  450 => 99,  446 => 96,  443 => 95,  440 => 94,  423 => 93,  420 => 92,  417 => 91,  411 => 89,  409 => 88,  403 => 86,  394 => 85,  384 => 65,  375 => 63,  370 => 62,  361 => 61,  340 => 49,  336 => 47,  330 => 46,  322 => 45,  314 => 44,  306 => 43,  302 => 41,  293 => 40,  283 => 82,  280 => 81,  274 => 79,  271 => 78,  268 => 76,  263 => 75,  260 => 74,  257 => 72,  251 => 70,  248 => 69,  246 => 68,  244 => 67,  241 => 66,  239 => 61,  236 => 60,  233 => 40,  224 => 39,  214 => 37,  205 => 35,  200 => 34,  191 => 33,  178 => 28,  169 => 27,  151 => 25,  138 => 361,  135 => 360,  132 => 354,  130 => 353,  126 => 351,  124 => 217,  121 => 216,  119 => 117,  112 => 113,  108 => 111,  106 => 85,  102 => 83,  100 => 39,  97 => 38,  95 => 33,  92 => 32,  90 => 27,  85 => 25,  81 => 23,  79 => 22,  77 => 21,  75 => 20,  73 => 19,  71 => 18,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  61 => 13,  59 => 12,  57 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% set _preview              = block('preview') is defined ? block('preview') : null %}
{% set _form                 = block('form') is defined ? block('form') : null %}
{% set _show                 = block('show') is defined ? block('show') : null %}
{% set _list_table           = block('list_table') is defined ? block('list_table') : null %}
{% set _list_filters         = block('list_filters') is defined ? block('list_filters') : null %}
{% set _tab_menu             = block('tab_menu') is defined ? block('tab_menu') : null %}
{% set _content              = block('content') is defined ? block('content') : null %}
{% set _title                = block('title') is defined ? block('title') : null %}
{% set _breadcrumb           = block('breadcrumb') is defined ? block('breadcrumb') : null %}
{% set _actions              = block('actions') is defined ? block('actions') : null %}
{% set _navbar_title         = block('navbar_title') is defined ? block('navbar_title') : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions') : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                    <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {%  if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif%}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last  %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    {{ label }}
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>

                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "@SonataAdmin/standard_layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
