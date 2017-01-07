<?php

/* AvanzuAdminThemeBundle:layout:macros.html.twig */
class __TwigTemplate_c469c77393ff81ff13d6a652f7871dc6d84a6a6429b9e85af039cb8fcabdb7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'box_collapse' => array($this, 'block_box_collapse'),
            'box_remove' => array($this, 'block_box_remove'),
            'box_header_buttons' => array($this, 'block_box_header_buttons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8543026425d5bf720ac7683f3a0803edfe7653fb33dc2bf72b3e262f7fb15670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8543026425d5bf720ac7683f3a0803edfe7653fb33dc2bf72b3e262f7fb15670->enter($__internal_8543026425d5bf720ac7683f3a0803edfe7653fb33dc2bf72b3e262f7fb15670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

        $__internal_f2eee6941d141b65a25bc3f1b114a60a4717f299e938e5aa225977218d973ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2eee6941d141b65a25bc3f1b114a60a4717f299e938e5aa225977218d973ab4->enter($__internal_f2eee6941d141b65a25bc3f1b114a60a4717f299e938e5aa225977218d973ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

        // line 1
        $this->displayBlock('box_collapse', $context, $blocks);
        // line 4
        $this->displayBlock('box_remove', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('box_header_buttons', $context, $blocks);
        // line 20
        echo "
";
        // line 28
        echo "

";
        // line 37
        echo "
";
        
        $__internal_8543026425d5bf720ac7683f3a0803edfe7653fb33dc2bf72b3e262f7fb15670->leave($__internal_8543026425d5bf720ac7683f3a0803edfe7653fb33dc2bf72b3e262f7fb15670_prof);

        
        $__internal_f2eee6941d141b65a25bc3f1b114a60a4717f299e938e5aa225977218d973ab4->leave($__internal_f2eee6941d141b65a25bc3f1b114a60a4717f299e938e5aa225977218d973ab4_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_e7282d30040ad9117029ffededf8ac798eee1c086f15ce23841f2c0c12fce1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7282d30040ad9117029ffededf8ac798eee1c086f15ce23841f2c0c12fce1c8->enter($__internal_e7282d30040ad9117029ffededf8ac798eee1c086f15ce23841f2c0c12fce1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        $__internal_baca8dad3c470afd931bed6fec093c27163118a8bbb52c3d766c02d8c5474fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baca8dad3c470afd931bed6fec093c27163118a8bbb52c3d766c02d8c5474fbd->enter($__internal_baca8dad3c470afd931bed6fec093c27163118a8bbb52c3d766c02d8c5474fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_baca8dad3c470afd931bed6fec093c27163118a8bbb52c3d766c02d8c5474fbd->leave($__internal_baca8dad3c470afd931bed6fec093c27163118a8bbb52c3d766c02d8c5474fbd_prof);

        
        $__internal_e7282d30040ad9117029ffededf8ac798eee1c086f15ce23841f2c0c12fce1c8->leave($__internal_e7282d30040ad9117029ffededf8ac798eee1c086f15ce23841f2c0c12fce1c8_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_4225a452f77f26b6e0e7cfaf23c676632812d7fa36537bdaf6e3afc6daac4580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4225a452f77f26b6e0e7cfaf23c676632812d7fa36537bdaf6e3afc6daac4580->enter($__internal_4225a452f77f26b6e0e7cfaf23c676632812d7fa36537bdaf6e3afc6daac4580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        $__internal_b60c0d67b81284081aa9270d0d1cdb2229666d9bb2e410528fbcffc3d427adfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60c0d67b81284081aa9270d0d1cdb2229666d9bb2e410528fbcffc3d427adfc->enter($__internal_b60c0d67b81284081aa9270d0d1cdb2229666d9bb2e410528fbcffc3d427adfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_b60c0d67b81284081aa9270d0d1cdb2229666d9bb2e410528fbcffc3d427adfc->leave($__internal_b60c0d67b81284081aa9270d0d1cdb2229666d9bb2e410528fbcffc3d427adfc_prof);

        
        $__internal_4225a452f77f26b6e0e7cfaf23c676632812d7fa36537bdaf6e3afc6daac4580->leave($__internal_4225a452f77f26b6e0e7cfaf23c676632812d7fa36537bdaf6e3afc6daac4580_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_4d3a6022da21e80cdd201177fb31ce1c67cc1b979a5c0e48f70ccd62451c0615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3a6022da21e80cdd201177fb31ce1c67cc1b979a5c0e48f70ccd62451c0615->enter($__internal_4d3a6022da21e80cdd201177fb31ce1c67cc1b979a5c0e48f70ccd62451c0615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        $__internal_59adcf39bdcc42c580ea5b439395e7fabbbb5c5f1712be6480345a6fe8051df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59adcf39bdcc42c580ea5b439395e7fabbbb5c5f1712be6480345a6fe8051df2->enter($__internal_59adcf39bdcc42c580ea5b439395e7fabbbb5c5f1712be6480345a6fe8051df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        // line 9
        echo "    ";
        if (((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse")) || (isset($context["remove"]) ? $context["remove"] : $this->getContext($context, "remove")))) {
            // line 10
            echo "        <div class=\"box-tools pull-right\">
            ";
            // line 11
            if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
                // line 12
                echo "                ";
                $this->displayBlock("box_collapse", $context, $blocks);
                echo "
            ";
            }
            // line 14
            echo "            ";
            if ((isset($context["remove"]) ? $context["remove"] : $this->getContext($context, "remove"))) {
                // line 15
                echo "                ";
                $this->displayBlock("box_remove", $context, $blocks);
                echo "
            ";
            }
            // line 17
            echo "        </div>
    ";
        }
        
        $__internal_59adcf39bdcc42c580ea5b439395e7fabbbb5c5f1712be6480345a6fe8051df2->leave($__internal_59adcf39bdcc42c580ea5b439395e7fabbbb5c5f1712be6480345a6fe8051df2_prof);

        
        $__internal_4d3a6022da21e80cdd201177fb31ce1c67cc1b979a5c0e48f70ccd62451c0615->leave($__internal_4d3a6022da21e80cdd201177fb31ce1c67cc1b979a5c0e48f70ccd62451c0615_prof);

    }

    // line 21
    public function getbox_header($__title__ = null, $__collapse__ = null, $__remove__ = null, $__type__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "collapse" => $__collapse__,
            "remove" => $__remove__,
            "type" => $__type__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f79dbb581deb50f450cb93bfa651a8aba0d36bf238dc9e69f8d75177a4791087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f79dbb581deb50f450cb93bfa651a8aba0d36bf238dc9e69f8d75177a4791087->enter($__internal_f79dbb581deb50f450cb93bfa651a8aba0d36bf238dc9e69f8d75177a4791087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            $__internal_0c585bf760efe014152d5110ac6fb50098ea76264e19978464e62cf27c4470cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0c585bf760efe014152d5110ac6fb50098ea76264e19978464e62cf27c4470cf->enter($__internal_0c585bf760efe014152d5110ac6fb50098ea76264e19978464e62cf27c4470cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            // line 22
            echo "
    <div class=\"box-header\">
        <h3 class=\"box-title\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
        ";
            // line 25
            $this->displayBlock("box_header_buttons", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_0c585bf760efe014152d5110ac6fb50098ea76264e19978464e62cf27c4470cf->leave($__internal_0c585bf760efe014152d5110ac6fb50098ea76264e19978464e62cf27c4470cf_prof);

            
            $__internal_f79dbb581deb50f450cb93bfa651a8aba0d36bf238dc9e69f8d75177a4791087->leave($__internal_f79dbb581deb50f450cb93bfa651a8aba0d36bf238dc9e69f8d75177a4791087_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getavatar($__image__ = null, $__alt__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_965b58b8bba4936fa4df7f27bdf34a75f87612625156f7ce52f21cbbc7e2fb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_965b58b8bba4936fa4df7f27bdf34a75f87612625156f7ce52f21cbbc7e2fb87->enter($__internal_965b58b8bba4936fa4df7f27bdf34a75f87612625156f7ce52f21cbbc7e2fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_6e03c24a43b5da1acfcaecb7e6d1e86e538b53f16f76e6b8b8f782d0ff28941b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6e03c24a43b5da1acfcaecb7e6d1e86e538b53f16f76e6b8b8f782d0ff28941b->enter($__internal_6e03c24a43b5da1acfcaecb7e6d1e86e538b53f16f76e6b8b8f782d0ff28941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            // line 31
            echo "    ";
            if ((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))) {
                // line 32
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 34
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/avanzuadmintheme/img/avatar.png"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            }
            
            $__internal_6e03c24a43b5da1acfcaecb7e6d1e86e538b53f16f76e6b8b8f782d0ff28941b->leave($__internal_6e03c24a43b5da1acfcaecb7e6d1e86e538b53f16f76e6b8b8f782d0ff28941b_prof);

            
            $__internal_965b58b8bba4936fa4df7f27bdf34a75f87612625156f7ce52f21cbbc7e2fb87->leave($__internal_965b58b8bba4936fa4df7f27bdf34a75f87612625156f7ce52f21cbbc7e2fb87_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getmenu_item($__item__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b8998cea61e5b1e7740d9ea6f7475d13a32ab9a01ef0c596ef0cc87315cb7b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b8998cea61e5b1e7740d9ea6f7475d13a32ab9a01ef0c596ef0cc87315cb7b84->enter($__internal_b8998cea61e5b1e7740d9ea6f7475d13a32ab9a01ef0c596ef0cc87315cb7b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_4f590638e278a0ce52b58968c500034cb5776e06b9da1cf89d8fb68e7ede8858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4f590638e278a0ce52b58968c500034cb5776e06b9da1cf89d8fb68e7ede8858->enter($__internal_4f590638e278a0ce52b58968c500034cb5776e06b9da1cf89d8fb68e7ede8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 39
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()) || $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()))) {
                // line 40
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "identifier", array()), "html", null, true);
                echo "\" class=\" ";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("#") : (((twig_in_filter("/", $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()))) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "routeArgs", array())))))), "html", null, true);
                echo "\">
                ";
                // line 42
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array())) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                // line 43
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "</span>
                ";
                // line 44
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 45
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
                ";
                }
                // line 47
                echo "                ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 48
                echo "            </a>

            ";
                // line 50
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    // line 51
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 53
                        echo "                        <li class=\"";
                        echo (($this->getAttribute($context["child"], "isActive", array())) ? ("active") : (""));
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "identifier", array()), "html", null, true);
                        echo "\">
                            <a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, ((twig_in_filter("/", $this->getAttribute($context["child"], "route", array()))) ? ($this->getAttribute($context["child"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["child"], "route", array()), $this->getAttribute($context["child"], "routeArgs", array())))), "html", null, true);
                        echo "\">
                                <i class=\"";
                        // line 55
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["child"], "icon", array()), "fa fa-circle-o")) : ("fa fa-circle-o")), "html", null, true);
                        echo "\"></i>
                                ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                </ul>
            ";
                }
                // line 62
                echo "        </li>
    ";
            } else {
                // line 64
                echo "        <li class=\"header\">
            ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "
            ";
                // line 66
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 67
                    echo "                <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
            ";
                }
                // line 69
                echo "        </li>
    ";
            }
            
            $__internal_4f590638e278a0ce52b58968c500034cb5776e06b9da1cf89d8fb68e7ede8858->leave($__internal_4f590638e278a0ce52b58968c500034cb5776e06b9da1cf89d8fb68e7ede8858_prof);

            
            $__internal_b8998cea61e5b1e7740d9ea6f7475d13a32ab9a01ef0c596ef0cc87315cb7b84->leave($__internal_b8998cea61e5b1e7740d9ea6f7475d13a32ab9a01ef0c596ef0cc87315cb7b84_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 69,  373 => 67,  371 => 66,  367 => 65,  364 => 64,  360 => 62,  356 => 60,  346 => 56,  342 => 55,  338 => 54,  331 => 53,  327 => 52,  324 => 51,  322 => 50,  318 => 48,  313 => 47,  305 => 45,  303 => 44,  298 => 43,  292 => 42,  288 => 41,  279 => 40,  276 => 39,  258 => 38,  229 => 34,  219 => 32,  216 => 31,  196 => 30,  172 => 25,  168 => 24,  164 => 22,  143 => 21,  131 => 17,  125 => 15,  122 => 14,  116 => 12,  114 => 11,  111 => 10,  108 => 9,  99 => 8,  86 => 5,  77 => 4,  64 => 2,  55 => 1,  44 => 37,  40 => 28,  37 => 20,  35 => 8,  32 => 7,  30 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block box_collapse %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
{% endblock %}
{% block box_remove %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
{% endblock %}

{% block box_header_buttons %}
    {% if collapse or remove %}
        <div class=\"box-tools pull-right\">
            {% if collapse %}
                {{ block('box_collapse') }}
            {% endif %}
            {% if remove %}
                {{ block('box_remove') }}
            {% endif %}
        </div>
    {% endif %}
{% endblock %}

{% macro box_header(title, collapse, remove, type) %}

    <div class=\"box-header\">
        <h3 class=\"box-title\">{{ title }}</h3>
        {{ block('box_header_buttons') }}
    </div>
{% endmacro %}


{% macro avatar(image, alt, class) %}
    {% if image %}
        <img src=\"{{ asset(image) }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% else %}
        <img src=\"{{ asset('bundles/avanzuadmintheme/img/avatar.png') }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% endif %}
{% endmacro %}

{% macro menu_item(item) %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\" class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                <span>{{ item.label }}</span>
                {% if item.badge %}
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                            <a href=\"{{ '/' in child.route ? child.route : path(child.route, child.routeArgs) }}\">
                                <i class=\"{{ child.icon|default('fa fa-circle-o') }}\"></i>
                                {{ child.label }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li class=\"header\">
            {{ item.label }}
            {% if item.badge %}
                <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
            {% endif %}
        </li>
    {% endif %}
{% endmacro %}
", "AvanzuAdminThemeBundle:layout:macros.html.twig", "/home/ubuntu/workspace/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/macros.html.twig");
    }
}
