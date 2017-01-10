<?php

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_049c963357d780053e8eb9e15cdbb57206a033819d77678307f672e423ef7fdb extends Twig_Template
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
        $__internal_980445c7b03b8c0bd7cddb503dcb371786d1fd643b9ea6363469d9d5c3d5997c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980445c7b03b8c0bd7cddb503dcb371786d1fd643b9ea6363469d9d5c3d5997c->enter($__internal_980445c7b03b8c0bd7cddb503dcb371786d1fd643b9ea6363469d9d5c3d5997c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        $__internal_e6e4e79eb9fe6f3a93635cc5714f86ffabec5ed190121728e4a23632f859edae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e4e79eb9fe6f3a93635cc5714f86ffabec5ed190121728e4a23632f859edae->enter($__internal_e6e4e79eb9fe6f3a93635cc5714f86ffabec5ed190121728e4a23632f859edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

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
        
        $__internal_980445c7b03b8c0bd7cddb503dcb371786d1fd643b9ea6363469d9d5c3d5997c->leave($__internal_980445c7b03b8c0bd7cddb503dcb371786d1fd643b9ea6363469d9d5c3d5997c_prof);

        
        $__internal_e6e4e79eb9fe6f3a93635cc5714f86ffabec5ed190121728e4a23632f859edae->leave($__internal_e6e4e79eb9fe6f3a93635cc5714f86ffabec5ed190121728e4a23632f859edae_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_1cc96094fd04d3b42329cba9015ba55ef762f608b4ff26c6dadb9b2f9acc61bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc96094fd04d3b42329cba9015ba55ef762f608b4ff26c6dadb9b2f9acc61bd->enter($__internal_1cc96094fd04d3b42329cba9015ba55ef762f608b4ff26c6dadb9b2f9acc61bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_b83a533ad2d210adfe40d708665a1d66ad837920bd458db78ff99c2453da973b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83a533ad2d210adfe40d708665a1d66ad837920bd458db78ff99c2453da973b->enter($__internal_b83a533ad2d210adfe40d708665a1d66ad837920bd458db78ff99c2453da973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_b83a533ad2d210adfe40d708665a1d66ad837920bd458db78ff99c2453da973b->leave($__internal_b83a533ad2d210adfe40d708665a1d66ad837920bd458db78ff99c2453da973b_prof);

        
        $__internal_1cc96094fd04d3b42329cba9015ba55ef762f608b4ff26c6dadb9b2f9acc61bd->leave($__internal_1cc96094fd04d3b42329cba9015ba55ef762f608b4ff26c6dadb9b2f9acc61bd_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_6505c9444bc23bdf1124de31ca69056babcc271be5cd6eced15baf4b76dcf037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6505c9444bc23bdf1124de31ca69056babcc271be5cd6eced15baf4b76dcf037->enter($__internal_6505c9444bc23bdf1124de31ca69056babcc271be5cd6eced15baf4b76dcf037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_05a08979b4e50f7a8779b38b382693088ddd674d5834b99af1b6ea663d87f264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a08979b4e50f7a8779b38b382693088ddd674d5834b99af1b6ea663d87f264->enter($__internal_05a08979b4e50f7a8779b38b382693088ddd674d5834b99af1b6ea663d87f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_05a08979b4e50f7a8779b38b382693088ddd674d5834b99af1b6ea663d87f264->leave($__internal_05a08979b4e50f7a8779b38b382693088ddd674d5834b99af1b6ea663d87f264_prof);

        
        $__internal_6505c9444bc23bdf1124de31ca69056babcc271be5cd6eced15baf4b76dcf037->leave($__internal_6505c9444bc23bdf1124de31ca69056babcc271be5cd6eced15baf4b76dcf037_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e2253a7009c67424c54bbde07589e1c606f620e9173ccfe3de95fe7fb77ae1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2253a7009c67424c54bbde07589e1c606f620e9173ccfe3de95fe7fb77ae1c->enter($__internal_1e2253a7009c67424c54bbde07589e1c606f620e9173ccfe3de95fe7fb77ae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2d462f7e9ca410cc30b84b78a5cf8ab81e09b9b569b7292e917cbef8b9f8f896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d462f7e9ca410cc30b84b78a5cf8ab81e09b9b569b7292e917cbef8b9f8f896->enter($__internal_2d462f7e9ca410cc30b84b78a5cf8ab81e09b9b569b7292e917cbef8b9f8f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2d462f7e9ca410cc30b84b78a5cf8ab81e09b9b569b7292e917cbef8b9f8f896->leave($__internal_2d462f7e9ca410cc30b84b78a5cf8ab81e09b9b569b7292e917cbef8b9f8f896_prof);

        
        $__internal_1e2253a7009c67424c54bbde07589e1c606f620e9173ccfe3de95fe7fb77ae1c->leave($__internal_1e2253a7009c67424c54bbde07589e1c606f620e9173ccfe3de95fe7fb77ae1c_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d51f4ef84232dc320d3c492119459eecb181071020e8cef312adf2f41a0340ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51f4ef84232dc320d3c492119459eecb181071020e8cef312adf2f41a0340ba->enter($__internal_d51f4ef84232dc320d3c492119459eecb181071020e8cef312adf2f41a0340ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91f41b71c871b018072f17f051e57657820874931d51c41fcfbb5f9af04e00d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f41b71c871b018072f17f051e57657820874931d51c41fcfbb5f9af04e00d3->enter($__internal_91f41b71c871b018072f17f051e57657820874931d51c41fcfbb5f9af04e00d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_91f41b71c871b018072f17f051e57657820874931d51c41fcfbb5f9af04e00d3->leave($__internal_91f41b71c871b018072f17f051e57657820874931d51c41fcfbb5f9af04e00d3_prof);

        
        $__internal_d51f4ef84232dc320d3c492119459eecb181071020e8cef312adf2f41a0340ba->leave($__internal_d51f4ef84232dc320d3c492119459eecb181071020e8cef312adf2f41a0340ba_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_45e4d5247388e595802fc70b0906a85f9fb8c95b5c4a00fc201f9975bab4478f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e4d5247388e595802fc70b0906a85f9fb8c95b5c4a00fc201f9975bab4478f->enter($__internal_45e4d5247388e595802fc70b0906a85f9fb8c95b5c4a00fc201f9975bab4478f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_614e1e7d7cf2f54ec78c66a18eaa25e518be74b612b563699f104794d08341aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614e1e7d7cf2f54ec78c66a18eaa25e518be74b612b563699f104794d08341aa->enter($__internal_614e1e7d7cf2f54ec78c66a18eaa25e518be74b612b563699f104794d08341aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_614e1e7d7cf2f54ec78c66a18eaa25e518be74b612b563699f104794d08341aa->leave($__internal_614e1e7d7cf2f54ec78c66a18eaa25e518be74b612b563699f104794d08341aa_prof);

        
        $__internal_45e4d5247388e595802fc70b0906a85f9fb8c95b5c4a00fc201f9975bab4478f->leave($__internal_45e4d5247388e595802fc70b0906a85f9fb8c95b5c4a00fc201f9975bab4478f_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_a8d2837a313b96e4c287ae90bc0363d27db4d8610110860c67c4df8a13f05ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d2837a313b96e4c287ae90bc0363d27db4d8610110860c67c4df8a13f05ac6->enter($__internal_a8d2837a313b96e4c287ae90bc0363d27db4d8610110860c67c4df8a13f05ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_75f80612f6da0aeca5677e056d092b616a9cc73c2dca60efdfd54a8247c04eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f80612f6da0aeca5677e056d092b616a9cc73c2dca60efdfd54a8247c04eb0->enter($__internal_75f80612f6da0aeca5677e056d092b616a9cc73c2dca60efdfd54a8247c04eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_75f80612f6da0aeca5677e056d092b616a9cc73c2dca60efdfd54a8247c04eb0->leave($__internal_75f80612f6da0aeca5677e056d092b616a9cc73c2dca60efdfd54a8247c04eb0_prof);

        
        $__internal_a8d2837a313b96e4c287ae90bc0363d27db4d8610110860c67c4df8a13f05ac6->leave($__internal_a8d2837a313b96e4c287ae90bc0363d27db4d8610110860c67c4df8a13f05ac6_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_bfeed8452d385de0340a2636d78aea97928c20b7d3a5f818fc0b8e34d9cb4139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfeed8452d385de0340a2636d78aea97928c20b7d3a5f818fc0b8e34d9cb4139->enter($__internal_bfeed8452d385de0340a2636d78aea97928c20b7d3a5f818fc0b8e34d9cb4139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_02a13a9a40afc0acc5fb1d6bf0d6d25a3e4e8dbe483cc98e039102ad62c5574c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a13a9a40afc0acc5fb1d6bf0d6d25a3e4e8dbe483cc98e039102ad62c5574c->enter($__internal_02a13a9a40afc0acc5fb1d6bf0d6d25a3e4e8dbe483cc98e039102ad62c5574c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_02a13a9a40afc0acc5fb1d6bf0d6d25a3e4e8dbe483cc98e039102ad62c5574c->leave($__internal_02a13a9a40afc0acc5fb1d6bf0d6d25a3e4e8dbe483cc98e039102ad62c5574c_prof);

        
        $__internal_bfeed8452d385de0340a2636d78aea97928c20b7d3a5f818fc0b8e34d9cb4139->leave($__internal_bfeed8452d385de0340a2636d78aea97928c20b7d3a5f818fc0b8e34d9cb4139_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f16d054b5369f04a4479364eec6a82d38b502c4580d59264fd862ae674a7ed2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16d054b5369f04a4479364eec6a82d38b502c4580d59264fd862ae674a7ed2a->enter($__internal_f16d054b5369f04a4479364eec6a82d38b502c4580d59264fd862ae674a7ed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_5762347c73d64e9bee051cc115bafa30c61f4633c9b4281b705390b2cce1c32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5762347c73d64e9bee051cc115bafa30c61f4633c9b4281b705390b2cce1c32f->enter($__internal_5762347c73d64e9bee051cc115bafa30c61f4633c9b4281b705390b2cce1c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_5762347c73d64e9bee051cc115bafa30c61f4633c9b4281b705390b2cce1c32f->leave($__internal_5762347c73d64e9bee051cc115bafa30c61f4633c9b4281b705390b2cce1c32f_prof);

        
        $__internal_f16d054b5369f04a4479364eec6a82d38b502c4580d59264fd862ae674a7ed2a->leave($__internal_f16d054b5369f04a4479364eec6a82d38b502c4580d59264fd862ae674a7ed2a_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_41bd7e7702104b4f0367728bda299cc3d6f8b8fe6a272844f1405f4ab7bea6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bd7e7702104b4f0367728bda299cc3d6f8b8fe6a272844f1405f4ab7bea6d7->enter($__internal_41bd7e7702104b4f0367728bda299cc3d6f8b8fe6a272844f1405f4ab7bea6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_442b2c3dd8eb186d12259e070cda542698101f22a44098991f0433b58408a94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442b2c3dd8eb186d12259e070cda542698101f22a44098991f0433b58408a94b->enter($__internal_442b2c3dd8eb186d12259e070cda542698101f22a44098991f0433b58408a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_442b2c3dd8eb186d12259e070cda542698101f22a44098991f0433b58408a94b->leave($__internal_442b2c3dd8eb186d12259e070cda542698101f22a44098991f0433b58408a94b_prof);

        
        $__internal_41bd7e7702104b4f0367728bda299cc3d6f8b8fe6a272844f1405f4ab7bea6d7->leave($__internal_41bd7e7702104b4f0367728bda299cc3d6f8b8fe6a272844f1405f4ab7bea6d7_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_c10c781037885416321f8a2918b4f16376d62064fabd90f42b444ea04fab2f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10c781037885416321f8a2918b4f16376d62064fabd90f42b444ea04fab2f1a->enter($__internal_c10c781037885416321f8a2918b4f16376d62064fabd90f42b444ea04fab2f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_35a458ff538a94764ec9311fdaea39ed799f90597e32ed7ca18361689cd2dc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a458ff538a94764ec9311fdaea39ed799f90597e32ed7ca18361689cd2dc35->enter($__internal_35a458ff538a94764ec9311fdaea39ed799f90597e32ed7ca18361689cd2dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_35a458ff538a94764ec9311fdaea39ed799f90597e32ed7ca18361689cd2dc35->leave($__internal_35a458ff538a94764ec9311fdaea39ed799f90597e32ed7ca18361689cd2dc35_prof);

        
        $__internal_c10c781037885416321f8a2918b4f16376d62064fabd90f42b444ea04fab2f1a->leave($__internal_c10c781037885416321f8a2918b4f16376d62064fabd90f42b444ea04fab2f1a_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0b314c995c23ccad0d789983410cbc612bc3361659674381c2164fd0b39648c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b314c995c23ccad0d789983410cbc612bc3361659674381c2164fd0b39648c2->enter($__internal_0b314c995c23ccad0d789983410cbc612bc3361659674381c2164fd0b39648c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_71541f40450c4f376c1a9356000bbfee8b38a6fbe37f12a28d7dcdedcd07e5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71541f40450c4f376c1a9356000bbfee8b38a6fbe37f12a28d7dcdedcd07e5a9->enter($__internal_71541f40450c4f376c1a9356000bbfee8b38a6fbe37f12a28d7dcdedcd07e5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_71541f40450c4f376c1a9356000bbfee8b38a6fbe37f12a28d7dcdedcd07e5a9->leave($__internal_71541f40450c4f376c1a9356000bbfee8b38a6fbe37f12a28d7dcdedcd07e5a9_prof);

        
        $__internal_0b314c995c23ccad0d789983410cbc612bc3361659674381c2164fd0b39648c2->leave($__internal_0b314c995c23ccad0d789983410cbc612bc3361659674381c2164fd0b39648c2_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0829ed0af0c97242c0205a7b7406e11c282720a0c5602150bc3aabeb874d734e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0829ed0af0c97242c0205a7b7406e11c282720a0c5602150bc3aabeb874d734e->enter($__internal_0829ed0af0c97242c0205a7b7406e11c282720a0c5602150bc3aabeb874d734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_a0a9f0254f7db8db5a007d1eba1e6d202b6a5cfd3c71f270679c921e42a8ae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9f0254f7db8db5a007d1eba1e6d202b6a5cfd3c71f270679c921e42a8ae21->enter($__internal_a0a9f0254f7db8db5a007d1eba1e6d202b6a5cfd3c71f270679c921e42a8ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_a0a9f0254f7db8db5a007d1eba1e6d202b6a5cfd3c71f270679c921e42a8ae21->leave($__internal_a0a9f0254f7db8db5a007d1eba1e6d202b6a5cfd3c71f270679c921e42a8ae21_prof);

        
        $__internal_0829ed0af0c97242c0205a7b7406e11c282720a0c5602150bc3aabeb874d734e->leave($__internal_0829ed0af0c97242c0205a7b7406e11c282720a0c5602150bc3aabeb874d734e_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c8373fd0839622319d4f7cf72773260fdc16f7f3e0868b8d637689d2c585791f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8373fd0839622319d4f7cf72773260fdc16f7f3e0868b8d637689d2c585791f->enter($__internal_c8373fd0839622319d4f7cf72773260fdc16f7f3e0868b8d637689d2c585791f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_5e552e9cea8c41c69b27fa9e58970894a0380becba5ca09c2f79b476c1bc41ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e552e9cea8c41c69b27fa9e58970894a0380becba5ca09c2f79b476c1bc41ee->enter($__internal_5e552e9cea8c41c69b27fa9e58970894a0380becba5ca09c2f79b476c1bc41ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_5e552e9cea8c41c69b27fa9e58970894a0380becba5ca09c2f79b476c1bc41ee->leave($__internal_5e552e9cea8c41c69b27fa9e58970894a0380becba5ca09c2f79b476c1bc41ee_prof);

        
        $__internal_c8373fd0839622319d4f7cf72773260fdc16f7f3e0868b8d637689d2c585791f->leave($__internal_c8373fd0839622319d4f7cf72773260fdc16f7f3e0868b8d637689d2c585791f_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_dccd88892c58d054b8095bdd4fd9abee6faf6cea16b7cc7f31b03705095f5de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccd88892c58d054b8095bdd4fd9abee6faf6cea16b7cc7f31b03705095f5de0->enter($__internal_dccd88892c58d054b8095bdd4fd9abee6faf6cea16b7cc7f31b03705095f5de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_3b8aa325d174992855ee24c4fccee84f4970779d5ea30206acf2e34413b40a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8aa325d174992855ee24c4fccee84f4970779d5ea30206acf2e34413b40a66->enter($__internal_3b8aa325d174992855ee24c4fccee84f4970779d5ea30206acf2e34413b40a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_3b8aa325d174992855ee24c4fccee84f4970779d5ea30206acf2e34413b40a66->leave($__internal_3b8aa325d174992855ee24c4fccee84f4970779d5ea30206acf2e34413b40a66_prof);

        
        $__internal_dccd88892c58d054b8095bdd4fd9abee6faf6cea16b7cc7f31b03705095f5de0->leave($__internal_dccd88892c58d054b8095bdd4fd9abee6faf6cea16b7cc7f31b03705095f5de0_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_f797a899951c7b88d9bf77e914eb1f41cb17967a47746962da3e17f0d48fe7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f797a899951c7b88d9bf77e914eb1f41cb17967a47746962da3e17f0d48fe7e2->enter($__internal_f797a899951c7b88d9bf77e914eb1f41cb17967a47746962da3e17f0d48fe7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_f32c7f9c4ebb5eedccc3e69a174233045fb3789e6f162030f8a00a2d442c778a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c7f9c4ebb5eedccc3e69a174233045fb3789e6f162030f8a00a2d442c778a->enter($__internal_f32c7f9c4ebb5eedccc3e69a174233045fb3789e6f162030f8a00a2d442c778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

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
        
        $__internal_f32c7f9c4ebb5eedccc3e69a174233045fb3789e6f162030f8a00a2d442c778a->leave($__internal_f32c7f9c4ebb5eedccc3e69a174233045fb3789e6f162030f8a00a2d442c778a_prof);

        
        $__internal_f797a899951c7b88d9bf77e914eb1f41cb17967a47746962da3e17f0d48fe7e2->leave($__internal_f797a899951c7b88d9bf77e914eb1f41cb17967a47746962da3e17f0d48fe7e2_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_1a9448c824e418a8709b07df73df456f985c3a9167dcedd3e864433981a9b840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9448c824e418a8709b07df73df456f985c3a9167dcedd3e864433981a9b840->enter($__internal_1a9448c824e418a8709b07df73df456f985c3a9167dcedd3e864433981a9b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_4c68aece116f16c18232ea97a6e1565a70bf97c1280391bd434f06616b357bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c68aece116f16c18232ea97a6e1565a70bf97c1280391bd434f06616b357bf4->enter($__internal_4c68aece116f16c18232ea97a6e1565a70bf97c1280391bd434f06616b357bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

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
        
        $__internal_4c68aece116f16c18232ea97a6e1565a70bf97c1280391bd434f06616b357bf4->leave($__internal_4c68aece116f16c18232ea97a6e1565a70bf97c1280391bd434f06616b357bf4_prof);

        
        $__internal_1a9448c824e418a8709b07df73df456f985c3a9167dcedd3e864433981a9b840->leave($__internal_1a9448c824e418a8709b07df73df456f985c3a9167dcedd3e864433981a9b840_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_73863ad0f534d30b62b4727e2a047731ac2e1b6947f855b5e737ddf8b8def334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73863ad0f534d30b62b4727e2a047731ac2e1b6947f855b5e737ddf8b8def334->enter($__internal_73863ad0f534d30b62b4727e2a047731ac2e1b6947f855b5e737ddf8b8def334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_69873758b4743b140f6aba44f816b5fcebdd565da7417a8e0056b839f84e4eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69873758b4743b140f6aba44f816b5fcebdd565da7417a8e0056b839f84e4eb0->enter($__internal_69873758b4743b140f6aba44f816b5fcebdd565da7417a8e0056b839f84e4eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_69873758b4743b140f6aba44f816b5fcebdd565da7417a8e0056b839f84e4eb0->leave($__internal_69873758b4743b140f6aba44f816b5fcebdd565da7417a8e0056b839f84e4eb0_prof);

        
        $__internal_73863ad0f534d30b62b4727e2a047731ac2e1b6947f855b5e737ddf8b8def334->leave($__internal_73863ad0f534d30b62b4727e2a047731ac2e1b6947f855b5e737ddf8b8def334_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c24da647e5bb7d36afbfc80ee459c484d246f9da47857141401c67a3009e3bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24da647e5bb7d36afbfc80ee459c484d246f9da47857141401c67a3009e3bda->enter($__internal_c24da647e5bb7d36afbfc80ee459c484d246f9da47857141401c67a3009e3bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_58adf1e1af07150d253a57468c7efb75f37abf37032830ba113bf0f158047ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58adf1e1af07150d253a57468c7efb75f37abf37032830ba113bf0f158047ce6->enter($__internal_58adf1e1af07150d253a57468c7efb75f37abf37032830ba113bf0f158047ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_58adf1e1af07150d253a57468c7efb75f37abf37032830ba113bf0f158047ce6->leave($__internal_58adf1e1af07150d253a57468c7efb75f37abf37032830ba113bf0f158047ce6_prof);

        
        $__internal_c24da647e5bb7d36afbfc80ee459c484d246f9da47857141401c67a3009e3bda->leave($__internal_c24da647e5bb7d36afbfc80ee459c484d246f9da47857141401c67a3009e3bda_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_da7d1f91b7bceb8db739416a3baecc8e1fef481140bd0c01c304f29fc67734e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7d1f91b7bceb8db739416a3baecc8e1fef481140bd0c01c304f29fc67734e8->enter($__internal_da7d1f91b7bceb8db739416a3baecc8e1fef481140bd0c01c304f29fc67734e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_cd2075b1fcbf8ce939a2cf0269e6c8fb6bb8ba3f81ffc47491c6f8f6bcb89198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2075b1fcbf8ce939a2cf0269e6c8fb6bb8ba3f81ffc47491c6f8f6bcb89198->enter($__internal_cd2075b1fcbf8ce939a2cf0269e6c8fb6bb8ba3f81ffc47491c6f8f6bcb89198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_cd2075b1fcbf8ce939a2cf0269e6c8fb6bb8ba3f81ffc47491c6f8f6bcb89198->leave($__internal_cd2075b1fcbf8ce939a2cf0269e6c8fb6bb8ba3f81ffc47491c6f8f6bcb89198_prof);

        
        $__internal_da7d1f91b7bceb8db739416a3baecc8e1fef481140bd0c01c304f29fc67734e8->leave($__internal_da7d1f91b7bceb8db739416a3baecc8e1fef481140bd0c01c304f29fc67734e8_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_36e2620c97ea294329eb36dbb6bf59d7361d8b10a3ecd10f7400a9e3156ebfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e2620c97ea294329eb36dbb6bf59d7361d8b10a3ecd10f7400a9e3156ebfd7->enter($__internal_36e2620c97ea294329eb36dbb6bf59d7361d8b10a3ecd10f7400a9e3156ebfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_0e5ee69184c649a89f30fe1617eb69583b2add8b3d11af41ba600e70e5b01147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5ee69184c649a89f30fe1617eb69583b2add8b3d11af41ba600e70e5b01147->enter($__internal_0e5ee69184c649a89f30fe1617eb69583b2add8b3d11af41ba600e70e5b01147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_0e5ee69184c649a89f30fe1617eb69583b2add8b3d11af41ba600e70e5b01147->leave($__internal_0e5ee69184c649a89f30fe1617eb69583b2add8b3d11af41ba600e70e5b01147_prof);

        
        $__internal_36e2620c97ea294329eb36dbb6bf59d7361d8b10a3ecd10f7400a9e3156ebfd7->leave($__internal_36e2620c97ea294329eb36dbb6bf59d7361d8b10a3ecd10f7400a9e3156ebfd7_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_be69d7c82f31d29982b0f8e08ab8d8097589e6b917bf32565312a40954b63d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be69d7c82f31d29982b0f8e08ab8d8097589e6b917bf32565312a40954b63d47->enter($__internal_be69d7c82f31d29982b0f8e08ab8d8097589e6b917bf32565312a40954b63d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_8bf31cf77e38becdbb9102476399d246983f904346c2ec2cbd93025e001b29f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf31cf77e38becdbb9102476399d246983f904346c2ec2cbd93025e001b29f5->enter($__internal_8bf31cf77e38becdbb9102476399d246983f904346c2ec2cbd93025e001b29f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_8bf31cf77e38becdbb9102476399d246983f904346c2ec2cbd93025e001b29f5->leave($__internal_8bf31cf77e38becdbb9102476399d246983f904346c2ec2cbd93025e001b29f5_prof);

        
        $__internal_be69d7c82f31d29982b0f8e08ab8d8097589e6b917bf32565312a40954b63d47->leave($__internal_be69d7c82f31d29982b0f8e08ab8d8097589e6b917bf32565312a40954b63d47_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_b5d484acc8d056469260c4e7c278e6d019d8eaee6dc3b08f042effe1ea6052ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d484acc8d056469260c4e7c278e6d019d8eaee6dc3b08f042effe1ea6052ef->enter($__internal_b5d484acc8d056469260c4e7c278e6d019d8eaee6dc3b08f042effe1ea6052ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_5a664b3ea772a299a1549f61a3b844373c985f057c3013dced51ba226ff88406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a664b3ea772a299a1549f61a3b844373c985f057c3013dced51ba226ff88406->enter($__internal_5a664b3ea772a299a1549f61a3b844373c985f057c3013dced51ba226ff88406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_5a664b3ea772a299a1549f61a3b844373c985f057c3013dced51ba226ff88406->leave($__internal_5a664b3ea772a299a1549f61a3b844373c985f057c3013dced51ba226ff88406_prof);

        
        $__internal_b5d484acc8d056469260c4e7c278e6d019d8eaee6dc3b08f042effe1ea6052ef->leave($__internal_b5d484acc8d056469260c4e7c278e6d019d8eaee6dc3b08f042effe1ea6052ef_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_218e3272a9804efc09989a909450dc5b776788b8bf689cfa554b12f6f517cbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218e3272a9804efc09989a909450dc5b776788b8bf689cfa554b12f6f517cbc3->enter($__internal_218e3272a9804efc09989a909450dc5b776788b8bf689cfa554b12f6f517cbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_4a2983c6ea7439761308ba4bdeb9bf07f4a1345f0f068a87b0a16fd4ad9d81ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2983c6ea7439761308ba4bdeb9bf07f4a1345f0f068a87b0a16fd4ad9d81ea->enter($__internal_4a2983c6ea7439761308ba4bdeb9bf07f4a1345f0f068a87b0a16fd4ad9d81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_4a2983c6ea7439761308ba4bdeb9bf07f4a1345f0f068a87b0a16fd4ad9d81ea->leave($__internal_4a2983c6ea7439761308ba4bdeb9bf07f4a1345f0f068a87b0a16fd4ad9d81ea_prof);

        
        $__internal_218e3272a9804efc09989a909450dc5b776788b8bf689cfa554b12f6f517cbc3->leave($__internal_218e3272a9804efc09989a909450dc5b776788b8bf689cfa554b12f6f517cbc3_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_cd68cfc676088884f1658bd47404235f4a76c2ee8603c8378507c2a37a69aeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd68cfc676088884f1658bd47404235f4a76c2ee8603c8378507c2a37a69aeec->enter($__internal_cd68cfc676088884f1658bd47404235f4a76c2ee8603c8378507c2a37a69aeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_463a7a4e0b5d2c98715f094839198b3e9e53e014469c70491e7a94399cfc44e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463a7a4e0b5d2c98715f094839198b3e9e53e014469c70491e7a94399cfc44e2->enter($__internal_463a7a4e0b5d2c98715f094839198b3e9e53e014469c70491e7a94399cfc44e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_463a7a4e0b5d2c98715f094839198b3e9e53e014469c70491e7a94399cfc44e2->leave($__internal_463a7a4e0b5d2c98715f094839198b3e9e53e014469c70491e7a94399cfc44e2_prof);

        
        $__internal_cd68cfc676088884f1658bd47404235f4a76c2ee8603c8378507c2a37a69aeec->leave($__internal_cd68cfc676088884f1658bd47404235f4a76c2ee8603c8378507c2a37a69aeec_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_b9ea5e72b24d7beade70bb532838d6ef049e2f2d3e5e92dd932a0146ced7789b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ea5e72b24d7beade70bb532838d6ef049e2f2d3e5e92dd932a0146ced7789b->enter($__internal_b9ea5e72b24d7beade70bb532838d6ef049e2f2d3e5e92dd932a0146ced7789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_872b617b537ae569950495b7282d1539db2d758044a16f808274c0d4e266189d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872b617b537ae569950495b7282d1539db2d758044a16f808274c0d4e266189d->enter($__internal_872b617b537ae569950495b7282d1539db2d758044a16f808274c0d4e266189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_872b617b537ae569950495b7282d1539db2d758044a16f808274c0d4e266189d->leave($__internal_872b617b537ae569950495b7282d1539db2d758044a16f808274c0d4e266189d_prof);

        
        $__internal_b9ea5e72b24d7beade70bb532838d6ef049e2f2d3e5e92dd932a0146ced7789b->leave($__internal_b9ea5e72b24d7beade70bb532838d6ef049e2f2d3e5e92dd932a0146ced7789b_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_ed13b90866d2bdd3e0db6c4fe346f6fdacf54dc6552cbbe1e7f4bb84f914215e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed13b90866d2bdd3e0db6c4fe346f6fdacf54dc6552cbbe1e7f4bb84f914215e->enter($__internal_ed13b90866d2bdd3e0db6c4fe346f6fdacf54dc6552cbbe1e7f4bb84f914215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_5c4ef9c2d0d7be22c835274369642a287d1c4169aac453094f5ebb42352638de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4ef9c2d0d7be22c835274369642a287d1c4169aac453094f5ebb42352638de->enter($__internal_5c4ef9c2d0d7be22c835274369642a287d1c4169aac453094f5ebb42352638de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_5c4ef9c2d0d7be22c835274369642a287d1c4169aac453094f5ebb42352638de->leave($__internal_5c4ef9c2d0d7be22c835274369642a287d1c4169aac453094f5ebb42352638de_prof);

        
        $__internal_ed13b90866d2bdd3e0db6c4fe346f6fdacf54dc6552cbbe1e7f4bb84f914215e->leave($__internal_ed13b90866d2bdd3e0db6c4fe346f6fdacf54dc6552cbbe1e7f4bb84f914215e_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_5220ecc2dc8e30f849349e27a5759fd8cd905f784e3f1c04742b091750a959c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5220ecc2dc8e30f849349e27a5759fd8cd905f784e3f1c04742b091750a959c7->enter($__internal_5220ecc2dc8e30f849349e27a5759fd8cd905f784e3f1c04742b091750a959c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_d106e6d27a50210539b4223d887b5c8c3a6edb161c7a7d4059231b3133ba4555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d106e6d27a50210539b4223d887b5c8c3a6edb161c7a7d4059231b3133ba4555->enter($__internal_d106e6d27a50210539b4223d887b5c8c3a6edb161c7a7d4059231b3133ba4555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_d106e6d27a50210539b4223d887b5c8c3a6edb161c7a7d4059231b3133ba4555->leave($__internal_d106e6d27a50210539b4223d887b5c8c3a6edb161c7a7d4059231b3133ba4555_prof);

        
        $__internal_5220ecc2dc8e30f849349e27a5759fd8cd905f784e3f1c04742b091750a959c7->leave($__internal_5220ecc2dc8e30f849349e27a5759fd8cd905f784e3f1c04742b091750a959c7_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_ffa3aba11513b210ae797dc27e6031f4b8b983448fe6b91808e9239bc4a7b0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa3aba11513b210ae797dc27e6031f4b8b983448fe6b91808e9239bc4a7b0f3->enter($__internal_ffa3aba11513b210ae797dc27e6031f4b8b983448fe6b91808e9239bc4a7b0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_65fd6a77b328b508afc511a97a23b59dbd903b1aac94f540c245f5d437f3d032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fd6a77b328b508afc511a97a23b59dbd903b1aac94f540c245f5d437f3d032->enter($__internal_65fd6a77b328b508afc511a97a23b59dbd903b1aac94f540c245f5d437f3d032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_65fd6a77b328b508afc511a97a23b59dbd903b1aac94f540c245f5d437f3d032->leave($__internal_65fd6a77b328b508afc511a97a23b59dbd903b1aac94f540c245f5d437f3d032_prof);

        
        $__internal_ffa3aba11513b210ae797dc27e6031f4b8b983448fe6b91808e9239bc4a7b0f3->leave($__internal_ffa3aba11513b210ae797dc27e6031f4b8b983448fe6b91808e9239bc4a7b0f3_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_3fe4e21d3dc5f77ccab3699f42790f978e33fee1f63f8ffb71e07f97c61afb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe4e21d3dc5f77ccab3699f42790f978e33fee1f63f8ffb71e07f97c61afb42->enter($__internal_3fe4e21d3dc5f77ccab3699f42790f978e33fee1f63f8ffb71e07f97c61afb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_b18d13841b87b7e28cb5a84b4cfc6ec4eea9f81afbde89f3a31898e2a4da05cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18d13841b87b7e28cb5a84b4cfc6ec4eea9f81afbde89f3a31898e2a4da05cc->enter($__internal_b18d13841b87b7e28cb5a84b4cfc6ec4eea9f81afbde89f3a31898e2a4da05cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_b18d13841b87b7e28cb5a84b4cfc6ec4eea9f81afbde89f3a31898e2a4da05cc->leave($__internal_b18d13841b87b7e28cb5a84b4cfc6ec4eea9f81afbde89f3a31898e2a4da05cc_prof);

        
        $__internal_3fe4e21d3dc5f77ccab3699f42790f978e33fee1f63f8ffb71e07f97c61afb42->leave($__internal_3fe4e21d3dc5f77ccab3699f42790f978e33fee1f63f8ffb71e07f97c61afb42_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_276fc586b3e6422ceabbd83b36a8dfc92dd62a3ce64e2d61aeddedf8a14e6a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276fc586b3e6422ceabbd83b36a8dfc92dd62a3ce64e2d61aeddedf8a14e6a60->enter($__internal_276fc586b3e6422ceabbd83b36a8dfc92dd62a3ce64e2d61aeddedf8a14e6a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_935a9588a7ae871b7ee61e94e40f93704e851e61a93f63e32dad2907b6458c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935a9588a7ae871b7ee61e94e40f93704e851e61a93f63e32dad2907b6458c95->enter($__internal_935a9588a7ae871b7ee61e94e40f93704e851e61a93f63e32dad2907b6458c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_935a9588a7ae871b7ee61e94e40f93704e851e61a93f63e32dad2907b6458c95->leave($__internal_935a9588a7ae871b7ee61e94e40f93704e851e61a93f63e32dad2907b6458c95_prof);

        
        $__internal_276fc586b3e6422ceabbd83b36a8dfc92dd62a3ce64e2d61aeddedf8a14e6a60->leave($__internal_276fc586b3e6422ceabbd83b36a8dfc92dd62a3ce64e2d61aeddedf8a14e6a60_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_fdef45e4d9e8669c625ee0897a2a5f3f647edb0363407dbfeb41094786d4f5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdef45e4d9e8669c625ee0897a2a5f3f647edb0363407dbfeb41094786d4f5db->enter($__internal_fdef45e4d9e8669c625ee0897a2a5f3f647edb0363407dbfeb41094786d4f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_87a008d38b57a3fd0eab190917e4396f4b4bb3beaed67859d06e76bc19814e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a008d38b57a3fd0eab190917e4396f4b4bb3beaed67859d06e76bc19814e5c->enter($__internal_87a008d38b57a3fd0eab190917e4396f4b4bb3beaed67859d06e76bc19814e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataAdmin/standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_87a008d38b57a3fd0eab190917e4396f4b4bb3beaed67859d06e76bc19814e5c->leave($__internal_87a008d38b57a3fd0eab190917e4396f4b4bb3beaed67859d06e76bc19814e5c_prof);

        
        $__internal_fdef45e4d9e8669c625ee0897a2a5f3f647edb0363407dbfeb41094786d4f5db->leave($__internal_fdef45e4d9e8669c625ee0897a2a5f3f647edb0363407dbfeb41094786d4f5db_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_4d9d1a4827520118fca4d94663f5c93acb5bb3ac4bb271b676913b7975306a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9d1a4827520118fca4d94663f5c93acb5bb3ac4bb271b676913b7975306a5b->enter($__internal_4d9d1a4827520118fca4d94663f5c93acb5bb3ac4bb271b676913b7975306a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_9fa3a62fe05bd30b6d9070db2073db671af6404e8c4028b5843512d542d79fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa3a62fe05bd30b6d9070db2073db671af6404e8c4028b5843512d542d79fe4->enter($__internal_9fa3a62fe05bd30b6d9070db2073db671af6404e8c4028b5843512d542d79fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_9fa3a62fe05bd30b6d9070db2073db671af6404e8c4028b5843512d542d79fe4->leave($__internal_9fa3a62fe05bd30b6d9070db2073db671af6404e8c4028b5843512d542d79fe4_prof);

        
        $__internal_4d9d1a4827520118fca4d94663f5c93acb5bb3ac4bb271b676913b7975306a5b->leave($__internal_4d9d1a4827520118fca4d94663f5c93acb5bb3ac4bb271b676913b7975306a5b_prof);

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
