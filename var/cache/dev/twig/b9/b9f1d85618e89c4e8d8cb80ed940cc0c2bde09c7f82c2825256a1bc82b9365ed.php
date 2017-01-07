<?php

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_957d2e1382cd096c2232fbab355057a635025a80c048fb97b11bb08c1b3a39d4 extends Twig_Template
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
        $__internal_b10a8fea3ec2596c9f68a1506f22e473ec071520bc91579e3ebc56181cdc860b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10a8fea3ec2596c9f68a1506f22e473ec071520bc91579e3ebc56181cdc860b->enter($__internal_b10a8fea3ec2596c9f68a1506f22e473ec071520bc91579e3ebc56181cdc860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        $__internal_3f07caf972be8418798b63c627595b4189949b80a07d1037ae2e0c9e7dcdae9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f07caf972be8418798b63c627595b4189949b80a07d1037ae2e0c9e7dcdae9c->enter($__internal_3f07caf972be8418798b63c627595b4189949b80a07d1037ae2e0c9e7dcdae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
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
        
        $__internal_b10a8fea3ec2596c9f68a1506f22e473ec071520bc91579e3ebc56181cdc860b->leave($__internal_b10a8fea3ec2596c9f68a1506f22e473ec071520bc91579e3ebc56181cdc860b_prof);

        
        $__internal_3f07caf972be8418798b63c627595b4189949b80a07d1037ae2e0c9e7dcdae9c->leave($__internal_3f07caf972be8418798b63c627595b4189949b80a07d1037ae2e0c9e7dcdae9c_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_60dbc570949818647a41ad9dc7a7f8f5fbb60c36197849e9e0cada2bc9bd0f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dbc570949818647a41ad9dc7a7f8f5fbb60c36197849e9e0cada2bc9bd0f7c->enter($__internal_60dbc570949818647a41ad9dc7a7f8f5fbb60c36197849e9e0cada2bc9bd0f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_7472ffaf34ceb89d8e9ab9c31341f0ef9ffa054d4d7298df6d03aad509e67ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7472ffaf34ceb89d8e9ab9c31341f0ef9ffa054d4d7298df6d03aad509e67ce0->enter($__internal_7472ffaf34ceb89d8e9ab9c31341f0ef9ffa054d4d7298df6d03aad509e67ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_7472ffaf34ceb89d8e9ab9c31341f0ef9ffa054d4d7298df6d03aad509e67ce0->leave($__internal_7472ffaf34ceb89d8e9ab9c31341f0ef9ffa054d4d7298df6d03aad509e67ce0_prof);

        
        $__internal_60dbc570949818647a41ad9dc7a7f8f5fbb60c36197849e9e0cada2bc9bd0f7c->leave($__internal_60dbc570949818647a41ad9dc7a7f8f5fbb60c36197849e9e0cada2bc9bd0f7c_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_42fb59978aab37b2e2181f3f0cd19c94fbeacdfe126e86ed63abbbd73697db20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fb59978aab37b2e2181f3f0cd19c94fbeacdfe126e86ed63abbbd73697db20->enter($__internal_42fb59978aab37b2e2181f3f0cd19c94fbeacdfe126e86ed63abbbd73697db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_0a65c1a15f34e961e84080b4cf048539f224b96a12fd5997364e49742bf5d5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a65c1a15f34e961e84080b4cf048539f224b96a12fd5997364e49742bf5d5bc->enter($__internal_0a65c1a15f34e961e84080b4cf048539f224b96a12fd5997364e49742bf5d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_0a65c1a15f34e961e84080b4cf048539f224b96a12fd5997364e49742bf5d5bc->leave($__internal_0a65c1a15f34e961e84080b4cf048539f224b96a12fd5997364e49742bf5d5bc_prof);

        
        $__internal_42fb59978aab37b2e2181f3f0cd19c94fbeacdfe126e86ed63abbbd73697db20->leave($__internal_42fb59978aab37b2e2181f3f0cd19c94fbeacdfe126e86ed63abbbd73697db20_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b28e3ad98b5a9a5315fda36a2ef834952261e737636bd9b3d1af05fbf7dee97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28e3ad98b5a9a5315fda36a2ef834952261e737636bd9b3d1af05fbf7dee97a->enter($__internal_b28e3ad98b5a9a5315fda36a2ef834952261e737636bd9b3d1af05fbf7dee97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ef85cc1294bb00fec667e2ee960de8799f4b20e63351499fc4e9e0d531c155c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef85cc1294bb00fec667e2ee960de8799f4b20e63351499fc4e9e0d531c155c->enter($__internal_6ef85cc1294bb00fec667e2ee960de8799f4b20e63351499fc4e9e0d531c155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
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
        
        $__internal_6ef85cc1294bb00fec667e2ee960de8799f4b20e63351499fc4e9e0d531c155c->leave($__internal_6ef85cc1294bb00fec667e2ee960de8799f4b20e63351499fc4e9e0d531c155c_prof);

        
        $__internal_b28e3ad98b5a9a5315fda36a2ef834952261e737636bd9b3d1af05fbf7dee97a->leave($__internal_b28e3ad98b5a9a5315fda36a2ef834952261e737636bd9b3d1af05fbf7dee97a_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1ea03db8d86f6bb34645cd2189575fe656f52bc52dd554872c2b44a037e309a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ea03db8d86f6bb34645cd2189575fe656f52bc52dd554872c2b44a037e309a->enter($__internal_a1ea03db8d86f6bb34645cd2189575fe656f52bc52dd554872c2b44a037e309a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_738fd196911d964b141326dc9caf531aed07580525725a90712070ae0ecbe437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738fd196911d964b141326dc9caf531aed07580525725a90712070ae0ecbe437->enter($__internal_738fd196911d964b141326dc9caf531aed07580525725a90712070ae0ecbe437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_738fd196911d964b141326dc9caf531aed07580525725a90712070ae0ecbe437->leave($__internal_738fd196911d964b141326dc9caf531aed07580525725a90712070ae0ecbe437_prof);

        
        $__internal_a1ea03db8d86f6bb34645cd2189575fe656f52bc52dd554872c2b44a037e309a->leave($__internal_a1ea03db8d86f6bb34645cd2189575fe656f52bc52dd554872c2b44a037e309a_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_87ed41523151d3a49699e0b0dc3da210a1f90535ab172245a5c0cd10fa116e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ed41523151d3a49699e0b0dc3da210a1f90535ab172245a5c0cd10fa116e2e->enter($__internal_87ed41523151d3a49699e0b0dc3da210a1f90535ab172245a5c0cd10fa116e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_58310bddfc8ff6c307b49500acafe050175be276bfc54f34d5afbf3e89744bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58310bddfc8ff6c307b49500acafe050175be276bfc54f34d5afbf3e89744bfc->enter($__internal_58310bddfc8ff6c307b49500acafe050175be276bfc54f34d5afbf3e89744bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
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
        
        $__internal_58310bddfc8ff6c307b49500acafe050175be276bfc54f34d5afbf3e89744bfc->leave($__internal_58310bddfc8ff6c307b49500acafe050175be276bfc54f34d5afbf3e89744bfc_prof);

        
        $__internal_87ed41523151d3a49699e0b0dc3da210a1f90535ab172245a5c0cd10fa116e2e->leave($__internal_87ed41523151d3a49699e0b0dc3da210a1f90535ab172245a5c0cd10fa116e2e_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_faf242a78f289a5173d2ae737f5d0b72b242dee39ac7a1aa6a4721d700af9321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf242a78f289a5173d2ae737f5d0b72b242dee39ac7a1aa6a4721d700af9321->enter($__internal_faf242a78f289a5173d2ae737f5d0b72b242dee39ac7a1aa6a4721d700af9321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_14cf6a0889a21a14f78cd5aa95a96ec10f167c15cb1a0ac865abfad5c23e4cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cf6a0889a21a14f78cd5aa95a96ec10f167c15cb1a0ac865abfad5c23e4cda->enter($__internal_14cf6a0889a21a14f78cd5aa95a96ec10f167c15cb1a0ac865abfad5c23e4cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
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
        
        $__internal_14cf6a0889a21a14f78cd5aa95a96ec10f167c15cb1a0ac865abfad5c23e4cda->leave($__internal_14cf6a0889a21a14f78cd5aa95a96ec10f167c15cb1a0ac865abfad5c23e4cda_prof);

        
        $__internal_faf242a78f289a5173d2ae737f5d0b72b242dee39ac7a1aa6a4721d700af9321->leave($__internal_faf242a78f289a5173d2ae737f5d0b72b242dee39ac7a1aa6a4721d700af9321_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_76c5fc0b66a726926004dd40d2d7d4cf63cbcb3416255b3b76c310b12d58f745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c5fc0b66a726926004dd40d2d7d4cf63cbcb3416255b3b76c310b12d58f745->enter($__internal_76c5fc0b66a726926004dd40d2d7d4cf63cbcb3416255b3b76c310b12d58f745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_f9a9ffff5699f7f227edb3254571db9842e300f0163c380d5defeb4687f9bc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a9ffff5699f7f227edb3254571db9842e300f0163c380d5defeb4687f9bc93->enter($__internal_f9a9ffff5699f7f227edb3254571db9842e300f0163c380d5defeb4687f9bc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
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
        
        $__internal_f9a9ffff5699f7f227edb3254571db9842e300f0163c380d5defeb4687f9bc93->leave($__internal_f9a9ffff5699f7f227edb3254571db9842e300f0163c380d5defeb4687f9bc93_prof);

        
        $__internal_76c5fc0b66a726926004dd40d2d7d4cf63cbcb3416255b3b76c310b12d58f745->leave($__internal_76c5fc0b66a726926004dd40d2d7d4cf63cbcb3416255b3b76c310b12d58f745_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_292a799100665521f44b4eb20d19e0e830158b445619224996253b4551f0661a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292a799100665521f44b4eb20d19e0e830158b445619224996253b4551f0661a->enter($__internal_292a799100665521f44b4eb20d19e0e830158b445619224996253b4551f0661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_6dcc441179721ea08333c19af9b8c6eefe2fc96d3389647851d1a85e4330d841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcc441179721ea08333c19af9b8c6eefe2fc96d3389647851d1a85e4330d841->enter($__internal_6dcc441179721ea08333c19af9b8c6eefe2fc96d3389647851d1a85e4330d841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_6dcc441179721ea08333c19af9b8c6eefe2fc96d3389647851d1a85e4330d841->leave($__internal_6dcc441179721ea08333c19af9b8c6eefe2fc96d3389647851d1a85e4330d841_prof);

        
        $__internal_292a799100665521f44b4eb20d19e0e830158b445619224996253b4551f0661a->leave($__internal_292a799100665521f44b4eb20d19e0e830158b445619224996253b4551f0661a_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_97d974a23e64a2665e122bc4968874a0202103d4480a658b13c4497e3d97ec8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d974a23e64a2665e122bc4968874a0202103d4480a658b13c4497e3d97ec8c->enter($__internal_97d974a23e64a2665e122bc4968874a0202103d4480a658b13c4497e3d97ec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_2d8f774bc723a33a67fde69adf40741446795b8c13bff1c377c18c3cb79223d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8f774bc723a33a67fde69adf40741446795b8c13bff1c377c18c3cb79223d0->enter($__internal_2d8f774bc723a33a67fde69adf40741446795b8c13bff1c377c18c3cb79223d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_2d8f774bc723a33a67fde69adf40741446795b8c13bff1c377c18c3cb79223d0->leave($__internal_2d8f774bc723a33a67fde69adf40741446795b8c13bff1c377c18c3cb79223d0_prof);

        
        $__internal_97d974a23e64a2665e122bc4968874a0202103d4480a658b13c4497e3d97ec8c->leave($__internal_97d974a23e64a2665e122bc4968874a0202103d4480a658b13c4497e3d97ec8c_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_aea79ee7c93c3587d9d83c67a2c7e5ced737321bf0dad5626d0e30e90bffdc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea79ee7c93c3587d9d83c67a2c7e5ced737321bf0dad5626d0e30e90bffdc2e->enter($__internal_aea79ee7c93c3587d9d83c67a2c7e5ced737321bf0dad5626d0e30e90bffdc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_f8715fff25cc3edf9f02832f1796aab97227ce4354feb88b3e3d023e5355e6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8715fff25cc3edf9f02832f1796aab97227ce4354feb88b3e3d023e5355e6bc->enter($__internal_f8715fff25cc3edf9f02832f1796aab97227ce4354feb88b3e3d023e5355e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_f8715fff25cc3edf9f02832f1796aab97227ce4354feb88b3e3d023e5355e6bc->leave($__internal_f8715fff25cc3edf9f02832f1796aab97227ce4354feb88b3e3d023e5355e6bc_prof);

        
        $__internal_aea79ee7c93c3587d9d83c67a2c7e5ced737321bf0dad5626d0e30e90bffdc2e->leave($__internal_aea79ee7c93c3587d9d83c67a2c7e5ced737321bf0dad5626d0e30e90bffdc2e_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_11a8b5a048dd8180bf1c299b3ac1dda3f396354c9c46b56e90aea809b535b76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a8b5a048dd8180bf1c299b3ac1dda3f396354c9c46b56e90aea809b535b76c->enter($__internal_11a8b5a048dd8180bf1c299b3ac1dda3f396354c9c46b56e90aea809b535b76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_00f8566a680e6e2f7cdb0356e4d44d2a38fa0133edf33004bc76f2b2513e115f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f8566a680e6e2f7cdb0356e4d44d2a38fa0133edf33004bc76f2b2513e115f->enter($__internal_00f8566a680e6e2f7cdb0356e4d44d2a38fa0133edf33004bc76f2b2513e115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_00f8566a680e6e2f7cdb0356e4d44d2a38fa0133edf33004bc76f2b2513e115f->leave($__internal_00f8566a680e6e2f7cdb0356e4d44d2a38fa0133edf33004bc76f2b2513e115f_prof);

        
        $__internal_11a8b5a048dd8180bf1c299b3ac1dda3f396354c9c46b56e90aea809b535b76c->leave($__internal_11a8b5a048dd8180bf1c299b3ac1dda3f396354c9c46b56e90aea809b535b76c_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b0bea0ccfc56f90b8951b1b19448b3c8b894a952d2b2e5a6dca7ab2ef7dc4dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0bea0ccfc56f90b8951b1b19448b3c8b894a952d2b2e5a6dca7ab2ef7dc4dd8->enter($__internal_b0bea0ccfc56f90b8951b1b19448b3c8b894a952d2b2e5a6dca7ab2ef7dc4dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_50220666d68ca43a1e9b8902c404e2ce154e4ffad1f04186bfe0f2685c7b271d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50220666d68ca43a1e9b8902c404e2ce154e4ffad1f04186bfe0f2685c7b271d->enter($__internal_50220666d68ca43a1e9b8902c404e2ce154e4ffad1f04186bfe0f2685c7b271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_50220666d68ca43a1e9b8902c404e2ce154e4ffad1f04186bfe0f2685c7b271d->leave($__internal_50220666d68ca43a1e9b8902c404e2ce154e4ffad1f04186bfe0f2685c7b271d_prof);

        
        $__internal_b0bea0ccfc56f90b8951b1b19448b3c8b894a952d2b2e5a6dca7ab2ef7dc4dd8->leave($__internal_b0bea0ccfc56f90b8951b1b19448b3c8b894a952d2b2e5a6dca7ab2ef7dc4dd8_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a5296f1e3bcf3276857c280fad20363bc43ba4d2592cc4846ae51218dc962aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5296f1e3bcf3276857c280fad20363bc43ba4d2592cc4846ae51218dc962aa1->enter($__internal_a5296f1e3bcf3276857c280fad20363bc43ba4d2592cc4846ae51218dc962aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_ecf00171fead5daf88603161968ec84fd010e7ac9f4a27f9e71da2482ed5ae74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf00171fead5daf88603161968ec84fd010e7ac9f4a27f9e71da2482ed5ae74->enter($__internal_ecf00171fead5daf88603161968ec84fd010e7ac9f4a27f9e71da2482ed5ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
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
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
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
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
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
        
        $__internal_ecf00171fead5daf88603161968ec84fd010e7ac9f4a27f9e71da2482ed5ae74->leave($__internal_ecf00171fead5daf88603161968ec84fd010e7ac9f4a27f9e71da2482ed5ae74_prof);

        
        $__internal_a5296f1e3bcf3276857c280fad20363bc43ba4d2592cc4846ae51218dc962aa1->leave($__internal_a5296f1e3bcf3276857c280fad20363bc43ba4d2592cc4846ae51218dc962aa1_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_c00776587467cfd2b61edcd0230122f3bd4e3ec2358ce8ca211ebb3817291272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00776587467cfd2b61edcd0230122f3bd4e3ec2358ce8ca211ebb3817291272->enter($__internal_c00776587467cfd2b61edcd0230122f3bd4e3ec2358ce8ca211ebb3817291272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_e7d1264f2dc9f26183a95ed9f2f6e670e4d5add95b636998b356ad0a11d03ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d1264f2dc9f26183a95ed9f2f6e670e4d5add95b636998b356ad0a11d03ffa->enter($__internal_e7d1264f2dc9f26183a95ed9f2f6e670e4d5add95b636998b356ad0a11d03ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
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
        
        $__internal_e7d1264f2dc9f26183a95ed9f2f6e670e4d5add95b636998b356ad0a11d03ffa->leave($__internal_e7d1264f2dc9f26183a95ed9f2f6e670e4d5add95b636998b356ad0a11d03ffa_prof);

        
        $__internal_c00776587467cfd2b61edcd0230122f3bd4e3ec2358ce8ca211ebb3817291272->leave($__internal_c00776587467cfd2b61edcd0230122f3bd4e3ec2358ce8ca211ebb3817291272_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_0c98ce21a677e6d1cdfeb7f12989f3a2f16fbbbc3f0fd238a7c8f662ce824296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c98ce21a677e6d1cdfeb7f12989f3a2f16fbbbc3f0fd238a7c8f662ce824296->enter($__internal_0c98ce21a677e6d1cdfeb7f12989f3a2f16fbbbc3f0fd238a7c8f662ce824296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_e253901a4a1d574a046af967c1ca735df7a2ccbe0adda679b1a60dac4e3685d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e253901a4a1d574a046af967c1ca735df7a2ccbe0adda679b1a60dac4e3685d2->enter($__internal_e253901a4a1d574a046af967c1ca735df7a2ccbe0adda679b1a60dac4e3685d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_e253901a4a1d574a046af967c1ca735df7a2ccbe0adda679b1a60dac4e3685d2->leave($__internal_e253901a4a1d574a046af967c1ca735df7a2ccbe0adda679b1a60dac4e3685d2_prof);

        
        $__internal_0c98ce21a677e6d1cdfeb7f12989f3a2f16fbbbc3f0fd238a7c8f662ce824296->leave($__internal_0c98ce21a677e6d1cdfeb7f12989f3a2f16fbbbc3f0fd238a7c8f662ce824296_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_43b3751fbbce905f533e90a95f36dc0eca157bc7c4f85126910b753445b23f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b3751fbbce905f533e90a95f36dc0eca157bc7c4f85126910b753445b23f55->enter($__internal_43b3751fbbce905f533e90a95f36dc0eca157bc7c4f85126910b753445b23f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_3897c25a671548a203ca962dc3e876ea9c6f560773f83e3d4654d875ce9a333f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3897c25a671548a203ca962dc3e876ea9c6f560773f83e3d4654d875ce9a333f->enter($__internal_3897c25a671548a203ca962dc3e876ea9c6f560773f83e3d4654d875ce9a333f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_3897c25a671548a203ca962dc3e876ea9c6f560773f83e3d4654d875ce9a333f->leave($__internal_3897c25a671548a203ca962dc3e876ea9c6f560773f83e3d4654d875ce9a333f_prof);

        
        $__internal_43b3751fbbce905f533e90a95f36dc0eca157bc7c4f85126910b753445b23f55->leave($__internal_43b3751fbbce905f533e90a95f36dc0eca157bc7c4f85126910b753445b23f55_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_809d4df1e3f77f638d1f7c18a90b422b4e8d38b983c450f37f88b8404581052e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809d4df1e3f77f638d1f7c18a90b422b4e8d38b983c450f37f88b8404581052e->enter($__internal_809d4df1e3f77f638d1f7c18a90b422b4e8d38b983c450f37f88b8404581052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_c166e57b483aa0604da7c6f844f147cd42c615cf2e07d86a28b02dac70328cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c166e57b483aa0604da7c6f844f147cd42c615cf2e07d86a28b02dac70328cb6->enter($__internal_c166e57b483aa0604da7c6f844f147cd42c615cf2e07d86a28b02dac70328cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_c166e57b483aa0604da7c6f844f147cd42c615cf2e07d86a28b02dac70328cb6->leave($__internal_c166e57b483aa0604da7c6f844f147cd42c615cf2e07d86a28b02dac70328cb6_prof);

        
        $__internal_809d4df1e3f77f638d1f7c18a90b422b4e8d38b983c450f37f88b8404581052e->leave($__internal_809d4df1e3f77f638d1f7c18a90b422b4e8d38b983c450f37f88b8404581052e_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5f3ebcf1397ae315c93dfcb727e8839ebc8c5feee06300288c612422e5fec3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3ebcf1397ae315c93dfcb727e8839ebc8c5feee06300288c612422e5fec3a1->enter($__internal_5f3ebcf1397ae315c93dfcb727e8839ebc8c5feee06300288c612422e5fec3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_abdb15f19a08ea734f0334058303e1611e119c809fb683cfb4f1be192242f685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdb15f19a08ea734f0334058303e1611e119c809fb683cfb4f1be192242f685->enter($__internal_abdb15f19a08ea734f0334058303e1611e119c809fb683cfb4f1be192242f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_abdb15f19a08ea734f0334058303e1611e119c809fb683cfb4f1be192242f685->leave($__internal_abdb15f19a08ea734f0334058303e1611e119c809fb683cfb4f1be192242f685_prof);

        
        $__internal_5f3ebcf1397ae315c93dfcb727e8839ebc8c5feee06300288c612422e5fec3a1->leave($__internal_5f3ebcf1397ae315c93dfcb727e8839ebc8c5feee06300288c612422e5fec3a1_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_0a5c65068d74dc1b34dde2861b580b778ad4233cd89297f1490ce1e798cf0d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5c65068d74dc1b34dde2861b580b778ad4233cd89297f1490ce1e798cf0d37->enter($__internal_0a5c65068d74dc1b34dde2861b580b778ad4233cd89297f1490ce1e798cf0d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_acc2047dc1ceca07015b0324ad40389e45c3b33771d85900fa0d3cdff001c5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc2047dc1ceca07015b0324ad40389e45c3b33771d85900fa0d3cdff001c5fa->enter($__internal_acc2047dc1ceca07015b0324ad40389e45c3b33771d85900fa0d3cdff001c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_acc2047dc1ceca07015b0324ad40389e45c3b33771d85900fa0d3cdff001c5fa->leave($__internal_acc2047dc1ceca07015b0324ad40389e45c3b33771d85900fa0d3cdff001c5fa_prof);

        
        $__internal_0a5c65068d74dc1b34dde2861b580b778ad4233cd89297f1490ce1e798cf0d37->leave($__internal_0a5c65068d74dc1b34dde2861b580b778ad4233cd89297f1490ce1e798cf0d37_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_5157de66ada51f50c0bb913dc2e50f9962a69b21f900f9c442ff85c688bda242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5157de66ada51f50c0bb913dc2e50f9962a69b21f900f9c442ff85c688bda242->enter($__internal_5157de66ada51f50c0bb913dc2e50f9962a69b21f900f9c442ff85c688bda242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_f10973b453effb53aac7666fa37713eda0caf52744144497ba6c47de4d531112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10973b453effb53aac7666fa37713eda0caf52744144497ba6c47de4d531112->enter($__internal_f10973b453effb53aac7666fa37713eda0caf52744144497ba6c47de4d531112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
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
        
        $__internal_f10973b453effb53aac7666fa37713eda0caf52744144497ba6c47de4d531112->leave($__internal_f10973b453effb53aac7666fa37713eda0caf52744144497ba6c47de4d531112_prof);

        
        $__internal_5157de66ada51f50c0bb913dc2e50f9962a69b21f900f9c442ff85c688bda242->leave($__internal_5157de66ada51f50c0bb913dc2e50f9962a69b21f900f9c442ff85c688bda242_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_0c04ecb9ec96c8536a47a9cb2def5db53909529583ec1cbedc0ce735931c50c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c04ecb9ec96c8536a47a9cb2def5db53909529583ec1cbedc0ce735931c50c5->enter($__internal_0c04ecb9ec96c8536a47a9cb2def5db53909529583ec1cbedc0ce735931c50c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_32ab205be61c3af63f95ae965b215f3a2d7879d8f0e5e086103b23a144da1b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ab205be61c3af63f95ae965b215f3a2d7879d8f0e5e086103b23a144da1b84->enter($__internal_32ab205be61c3af63f95ae965b215f3a2d7879d8f0e5e086103b23a144da1b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_32ab205be61c3af63f95ae965b215f3a2d7879d8f0e5e086103b23a144da1b84->leave($__internal_32ab205be61c3af63f95ae965b215f3a2d7879d8f0e5e086103b23a144da1b84_prof);

        
        $__internal_0c04ecb9ec96c8536a47a9cb2def5db53909529583ec1cbedc0ce735931c50c5->leave($__internal_0c04ecb9ec96c8536a47a9cb2def5db53909529583ec1cbedc0ce735931c50c5_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_b3a2d56d16c4e8d03d2e8b0e0695fef7ca7c0bde47ed2314be9f7c96d72a47c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a2d56d16c4e8d03d2e8b0e0695fef7ca7c0bde47ed2314be9f7c96d72a47c7->enter($__internal_b3a2d56d16c4e8d03d2e8b0e0695fef7ca7c0bde47ed2314be9f7c96d72a47c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_24b23b13009b3d6c51cbf20209b9ae3cc2d427d5f46f4a5a7c7d2ad16b2721ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b23b13009b3d6c51cbf20209b9ae3cc2d427d5f46f4a5a7c7d2ad16b2721ff->enter($__internal_24b23b13009b3d6c51cbf20209b9ae3cc2d427d5f46f4a5a7c7d2ad16b2721ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_24b23b13009b3d6c51cbf20209b9ae3cc2d427d5f46f4a5a7c7d2ad16b2721ff->leave($__internal_24b23b13009b3d6c51cbf20209b9ae3cc2d427d5f46f4a5a7c7d2ad16b2721ff_prof);

        
        $__internal_b3a2d56d16c4e8d03d2e8b0e0695fef7ca7c0bde47ed2314be9f7c96d72a47c7->leave($__internal_b3a2d56d16c4e8d03d2e8b0e0695fef7ca7c0bde47ed2314be9f7c96d72a47c7_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_081e63bc282397d90ceb380cc42a338e9224927947bc7ffe01b6e065987678f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081e63bc282397d90ceb380cc42a338e9224927947bc7ffe01b6e065987678f7->enter($__internal_081e63bc282397d90ceb380cc42a338e9224927947bc7ffe01b6e065987678f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_9c4633b7c458f376e39d24850adb96424590ff8249b8301d096f6b7ac092c2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4633b7c458f376e39d24850adb96424590ff8249b8301d096f6b7ac092c2f8->enter($__internal_9c4633b7c458f376e39d24850adb96424590ff8249b8301d096f6b7ac092c2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_9c4633b7c458f376e39d24850adb96424590ff8249b8301d096f6b7ac092c2f8->leave($__internal_9c4633b7c458f376e39d24850adb96424590ff8249b8301d096f6b7ac092c2f8_prof);

        
        $__internal_081e63bc282397d90ceb380cc42a338e9224927947bc7ffe01b6e065987678f7->leave($__internal_081e63bc282397d90ceb380cc42a338e9224927947bc7ffe01b6e065987678f7_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_407b9d1cff0adef4898b60fd318fe05af40a7130ab75b3bc0a6794c094bce0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407b9d1cff0adef4898b60fd318fe05af40a7130ab75b3bc0a6794c094bce0f0->enter($__internal_407b9d1cff0adef4898b60fd318fe05af40a7130ab75b3bc0a6794c094bce0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_3bfef693cb032a8ef0bba49ccbdfb9433bcda596906273fa7ba0e6557b43a11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfef693cb032a8ef0bba49ccbdfb9433bcda596906273fa7ba0e6557b43a11a->enter($__internal_3bfef693cb032a8ef0bba49ccbdfb9433bcda596906273fa7ba0e6557b43a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_3bfef693cb032a8ef0bba49ccbdfb9433bcda596906273fa7ba0e6557b43a11a->leave($__internal_3bfef693cb032a8ef0bba49ccbdfb9433bcda596906273fa7ba0e6557b43a11a_prof);

        
        $__internal_407b9d1cff0adef4898b60fd318fe05af40a7130ab75b3bc0a6794c094bce0f0->leave($__internal_407b9d1cff0adef4898b60fd318fe05af40a7130ab75b3bc0a6794c094bce0f0_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_d5c5552026c8b5a1a60f89cc32d960f5c579fefa4bdfe1669e90ff699007c81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c5552026c8b5a1a60f89cc32d960f5c579fefa4bdfe1669e90ff699007c81f->enter($__internal_d5c5552026c8b5a1a60f89cc32d960f5c579fefa4bdfe1669e90ff699007c81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_ff63ddd698bded7ddd022b912775d26e18984ebd78e72f464a2b92240b610a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff63ddd698bded7ddd022b912775d26e18984ebd78e72f464a2b92240b610a91->enter($__internal_ff63ddd698bded7ddd022b912775d26e18984ebd78e72f464a2b92240b610a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_ff63ddd698bded7ddd022b912775d26e18984ebd78e72f464a2b92240b610a91->leave($__internal_ff63ddd698bded7ddd022b912775d26e18984ebd78e72f464a2b92240b610a91_prof);

        
        $__internal_d5c5552026c8b5a1a60f89cc32d960f5c579fefa4bdfe1669e90ff699007c81f->leave($__internal_d5c5552026c8b5a1a60f89cc32d960f5c579fefa4bdfe1669e90ff699007c81f_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_51ce5be3e3ff63b975d25d8c3168e3d4283bce13efa117fa9bc8122adf46156d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ce5be3e3ff63b975d25d8c3168e3d4283bce13efa117fa9bc8122adf46156d->enter($__internal_51ce5be3e3ff63b975d25d8c3168e3d4283bce13efa117fa9bc8122adf46156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_c08902d232a7691de4c25012a3568a45062fed79bba4774c8cb52c6f4283c58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08902d232a7691de4c25012a3568a45062fed79bba4774c8cb52c6f4283c58d->enter($__internal_c08902d232a7691de4c25012a3568a45062fed79bba4774c8cb52c6f4283c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_c08902d232a7691de4c25012a3568a45062fed79bba4774c8cb52c6f4283c58d->leave($__internal_c08902d232a7691de4c25012a3568a45062fed79bba4774c8cb52c6f4283c58d_prof);

        
        $__internal_51ce5be3e3ff63b975d25d8c3168e3d4283bce13efa117fa9bc8122adf46156d->leave($__internal_51ce5be3e3ff63b975d25d8c3168e3d4283bce13efa117fa9bc8122adf46156d_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_0e3d1841a2dd8ed87a83bbffc9aa5e63d9ae6506f4dc39bae231e6ed3d0fa23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3d1841a2dd8ed87a83bbffc9aa5e63d9ae6506f4dc39bae231e6ed3d0fa23d->enter($__internal_0e3d1841a2dd8ed87a83bbffc9aa5e63d9ae6506f4dc39bae231e6ed3d0fa23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_eaf8ded834c00c1e8a969029ffa04739275d6c60b774c88aae41a797edeabebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf8ded834c00c1e8a969029ffa04739275d6c60b774c88aae41a797edeabebd->enter($__internal_eaf8ded834c00c1e8a969029ffa04739275d6c60b774c88aae41a797edeabebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
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
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
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
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
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
        
        $__internal_eaf8ded834c00c1e8a969029ffa04739275d6c60b774c88aae41a797edeabebd->leave($__internal_eaf8ded834c00c1e8a969029ffa04739275d6c60b774c88aae41a797edeabebd_prof);

        
        $__internal_0e3d1841a2dd8ed87a83bbffc9aa5e63d9ae6506f4dc39bae231e6ed3d0fa23d->leave($__internal_0e3d1841a2dd8ed87a83bbffc9aa5e63d9ae6506f4dc39bae231e6ed3d0fa23d_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_b871751a74ce86261520164edfa70104f8b6a5e0dc7b6ebcc8b8dc51960da2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b871751a74ce86261520164edfa70104f8b6a5e0dc7b6ebcc8b8dc51960da2d2->enter($__internal_b871751a74ce86261520164edfa70104f8b6a5e0dc7b6ebcc8b8dc51960da2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_0c95cdb07a47f2003e4ba76015fca0f275ba44824a4b88504729d925c83aa3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c95cdb07a47f2003e4ba76015fca0f275ba44824a4b88504729d925c83aa3b2->enter($__internal_0c95cdb07a47f2003e4ba76015fca0f275ba44824a4b88504729d925c83aa3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_0c95cdb07a47f2003e4ba76015fca0f275ba44824a4b88504729d925c83aa3b2->leave($__internal_0c95cdb07a47f2003e4ba76015fca0f275ba44824a4b88504729d925c83aa3b2_prof);

        
        $__internal_b871751a74ce86261520164edfa70104f8b6a5e0dc7b6ebcc8b8dc51960da2d2->leave($__internal_b871751a74ce86261520164edfa70104f8b6a5e0dc7b6ebcc8b8dc51960da2d2_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_998b2dd74fd7a15b15d7489f76a25827e084759245dadd2a837e504efb437d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998b2dd74fd7a15b15d7489f76a25827e084759245dadd2a837e504efb437d7f->enter($__internal_998b2dd74fd7a15b15d7489f76a25827e084759245dadd2a837e504efb437d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_c4f176581d739156c92b1e96dbf84592bba41698f9f0948b0d78b5217ebe6503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f176581d739156c92b1e96dbf84592bba41698f9f0948b0d78b5217ebe6503->enter($__internal_c4f176581d739156c92b1e96dbf84592bba41698f9f0948b0d78b5217ebe6503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_c4f176581d739156c92b1e96dbf84592bba41698f9f0948b0d78b5217ebe6503->leave($__internal_c4f176581d739156c92b1e96dbf84592bba41698f9f0948b0d78b5217ebe6503_prof);

        
        $__internal_998b2dd74fd7a15b15d7489f76a25827e084759245dadd2a837e504efb437d7f->leave($__internal_998b2dd74fd7a15b15d7489f76a25827e084759245dadd2a837e504efb437d7f_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_7d743ee30ae08a350856eb9fdf5a4af77863e08fbd96da0d49130b230c1bed37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d743ee30ae08a350856eb9fdf5a4af77863e08fbd96da0d49130b230c1bed37->enter($__internal_7d743ee30ae08a350856eb9fdf5a4af77863e08fbd96da0d49130b230c1bed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_06772320d47485637f1a768abec3d7916837eba12367eba6dbf79365303781a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06772320d47485637f1a768abec3d7916837eba12367eba6dbf79365303781a3->enter($__internal_06772320d47485637f1a768abec3d7916837eba12367eba6dbf79365303781a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_06772320d47485637f1a768abec3d7916837eba12367eba6dbf79365303781a3->leave($__internal_06772320d47485637f1a768abec3d7916837eba12367eba6dbf79365303781a3_prof);

        
        $__internal_7d743ee30ae08a350856eb9fdf5a4af77863e08fbd96da0d49130b230c1bed37->leave($__internal_7d743ee30ae08a350856eb9fdf5a4af77863e08fbd96da0d49130b230c1bed37_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_a8d8c8b4692864bfa469ad71fc1df3e9367b1f5cf703b64e4a16713ebf8f1161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d8c8b4692864bfa469ad71fc1df3e9367b1f5cf703b64e4a16713ebf8f1161->enter($__internal_a8d8c8b4692864bfa469ad71fc1df3e9367b1f5cf703b64e4a16713ebf8f1161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_98485201e55da30b5949cf6573c23c682ee5bf0021e34095ae11bbfa0e0d7e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98485201e55da30b5949cf6573c23c682ee5bf0021e34095ae11bbfa0e0d7e62->enter($__internal_98485201e55da30b5949cf6573c23c682ee5bf0021e34095ae11bbfa0e0d7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataAdmin/standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_98485201e55da30b5949cf6573c23c682ee5bf0021e34095ae11bbfa0e0d7e62->leave($__internal_98485201e55da30b5949cf6573c23c682ee5bf0021e34095ae11bbfa0e0d7e62_prof);

        
        $__internal_a8d8c8b4692864bfa469ad71fc1df3e9367b1f5cf703b64e4a16713ebf8f1161->leave($__internal_a8d8c8b4692864bfa469ad71fc1df3e9367b1f5cf703b64e4a16713ebf8f1161_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_060cde26b8d1793f18edeb30d1f7a828095d05c8f5446238e9141a79cc8015e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060cde26b8d1793f18edeb30d1f7a828095d05c8f5446238e9141a79cc8015e3->enter($__internal_060cde26b8d1793f18edeb30d1f7a828095d05c8f5446238e9141a79cc8015e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_0fd4d7e0890c622d010aba4cba3afa2c88b2c1b3a71488d6ebd496f2dbf6ed5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd4d7e0890c622d010aba4cba3afa2c88b2c1b3a71488d6ebd496f2dbf6ed5c->enter($__internal_0fd4d7e0890c622d010aba4cba3afa2c88b2c1b3a71488d6ebd496f2dbf6ed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_0fd4d7e0890c622d010aba4cba3afa2c88b2c1b3a71488d6ebd496f2dbf6ed5c->leave($__internal_0fd4d7e0890c622d010aba4cba3afa2c88b2c1b3a71488d6ebd496f2dbf6ed5c_prof);

        
        $__internal_060cde26b8d1793f18edeb30d1f7a828095d05c8f5446238e9141a79cc8015e3->leave($__internal_060cde26b8d1793f18edeb30d1f7a828095d05c8f5446238e9141a79cc8015e3_prof);

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
", "@SonataAdmin/standard_layout.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
