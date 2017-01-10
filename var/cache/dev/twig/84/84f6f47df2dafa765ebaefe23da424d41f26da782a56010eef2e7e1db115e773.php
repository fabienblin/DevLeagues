<?php

/* AvanzuAdminThemeBundle:layout:macros.html.twig */
class __TwigTemplate_af9048fcc593b3e90a214d42b5f6559e2adeaa31dc6930a3e1237b438bd1f334 extends Twig_Template
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
        $__internal_cd4d03f50826cfee2f6f29614ff35788d2d63e3d9909c31dc38a52e7f5c2c261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4d03f50826cfee2f6f29614ff35788d2d63e3d9909c31dc38a52e7f5c2c261->enter($__internal_cd4d03f50826cfee2f6f29614ff35788d2d63e3d9909c31dc38a52e7f5c2c261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

        $__internal_6ee0607a7ee768da434f54a3b662758816f73e8958e7a211956572626cb43a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee0607a7ee768da434f54a3b662758816f73e8958e7a211956572626cb43a13->enter($__internal_6ee0607a7ee768da434f54a3b662758816f73e8958e7a211956572626cb43a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

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
        
        $__internal_cd4d03f50826cfee2f6f29614ff35788d2d63e3d9909c31dc38a52e7f5c2c261->leave($__internal_cd4d03f50826cfee2f6f29614ff35788d2d63e3d9909c31dc38a52e7f5c2c261_prof);

        
        $__internal_6ee0607a7ee768da434f54a3b662758816f73e8958e7a211956572626cb43a13->leave($__internal_6ee0607a7ee768da434f54a3b662758816f73e8958e7a211956572626cb43a13_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_1f52cb7090f50ea04e7dae133d81a7abfca8573fb35ca3aa9ab412a584e017ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f52cb7090f50ea04e7dae133d81a7abfca8573fb35ca3aa9ab412a584e017ae->enter($__internal_1f52cb7090f50ea04e7dae133d81a7abfca8573fb35ca3aa9ab412a584e017ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        $__internal_4001154dd44f9bf39c4e4132721aebbd54ab91175bfd6ec9f29490c31c39584a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4001154dd44f9bf39c4e4132721aebbd54ab91175bfd6ec9f29490c31c39584a->enter($__internal_4001154dd44f9bf39c4e4132721aebbd54ab91175bfd6ec9f29490c31c39584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_4001154dd44f9bf39c4e4132721aebbd54ab91175bfd6ec9f29490c31c39584a->leave($__internal_4001154dd44f9bf39c4e4132721aebbd54ab91175bfd6ec9f29490c31c39584a_prof);

        
        $__internal_1f52cb7090f50ea04e7dae133d81a7abfca8573fb35ca3aa9ab412a584e017ae->leave($__internal_1f52cb7090f50ea04e7dae133d81a7abfca8573fb35ca3aa9ab412a584e017ae_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_53c378e18fa18228f7033195a1234ea56e6664e418a21a3919e6934637af599e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c378e18fa18228f7033195a1234ea56e6664e418a21a3919e6934637af599e->enter($__internal_53c378e18fa18228f7033195a1234ea56e6664e418a21a3919e6934637af599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        $__internal_29ed4e8a93a03a0782b74101aa35a12e0dbde36879f1ea794f41168defcea558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ed4e8a93a03a0782b74101aa35a12e0dbde36879f1ea794f41168defcea558->enter($__internal_29ed4e8a93a03a0782b74101aa35a12e0dbde36879f1ea794f41168defcea558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_29ed4e8a93a03a0782b74101aa35a12e0dbde36879f1ea794f41168defcea558->leave($__internal_29ed4e8a93a03a0782b74101aa35a12e0dbde36879f1ea794f41168defcea558_prof);

        
        $__internal_53c378e18fa18228f7033195a1234ea56e6664e418a21a3919e6934637af599e->leave($__internal_53c378e18fa18228f7033195a1234ea56e6664e418a21a3919e6934637af599e_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_21da0863bec6ac5aede0b61e62100ae1c2998c021ee4fab4e2c3aa238610a647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21da0863bec6ac5aede0b61e62100ae1c2998c021ee4fab4e2c3aa238610a647->enter($__internal_21da0863bec6ac5aede0b61e62100ae1c2998c021ee4fab4e2c3aa238610a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        $__internal_a546962e472b69aa27b638256d00d86a8981ecfa98db0f71726b8111437a7a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a546962e472b69aa27b638256d00d86a8981ecfa98db0f71726b8111437a7a33->enter($__internal_a546962e472b69aa27b638256d00d86a8981ecfa98db0f71726b8111437a7a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        // line 9
        echo "    ";
        if ((($context["collapse"] ?? $this->getContext($context, "collapse")) || ($context["remove"] ?? $this->getContext($context, "remove")))) {
            // line 10
            echo "        <div class=\"box-tools pull-right\">
            ";
            // line 11
            if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
                // line 12
                echo "                ";
                $this->displayBlock("box_collapse", $context, $blocks);
                echo "
            ";
            }
            // line 14
            echo "            ";
            if (($context["remove"] ?? $this->getContext($context, "remove"))) {
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
        
        $__internal_a546962e472b69aa27b638256d00d86a8981ecfa98db0f71726b8111437a7a33->leave($__internal_a546962e472b69aa27b638256d00d86a8981ecfa98db0f71726b8111437a7a33_prof);

        
        $__internal_21da0863bec6ac5aede0b61e62100ae1c2998c021ee4fab4e2c3aa238610a647->leave($__internal_21da0863bec6ac5aede0b61e62100ae1c2998c021ee4fab4e2c3aa238610a647_prof);

    }

    // line 21
    public function getbox_header($__title__ = null, $__collapse__ = null, $__remove__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "collapse" => $__collapse__,
            "remove" => $__remove__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0ee1ee1012f75cb47c80110f2650d0116ad89f3eb112cbf44698e9a951c62195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0ee1ee1012f75cb47c80110f2650d0116ad89f3eb112cbf44698e9a951c62195->enter($__internal_0ee1ee1012f75cb47c80110f2650d0116ad89f3eb112cbf44698e9a951c62195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            $__internal_c26ab22261f22080ad700d02bd101136045f3b6a251f8817c06aab3abf9f24b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c26ab22261f22080ad700d02bd101136045f3b6a251f8817c06aab3abf9f24b4->enter($__internal_c26ab22261f22080ad700d02bd101136045f3b6a251f8817c06aab3abf9f24b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            // line 22
            echo "
    <div class=\"box-header\">
        <h3 class=\"box-title\">";
            // line 24
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
        ";
            // line 25
            $this->displayBlock("box_header_buttons", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_c26ab22261f22080ad700d02bd101136045f3b6a251f8817c06aab3abf9f24b4->leave($__internal_c26ab22261f22080ad700d02bd101136045f3b6a251f8817c06aab3abf9f24b4_prof);

            
            $__internal_0ee1ee1012f75cb47c80110f2650d0116ad89f3eb112cbf44698e9a951c62195->leave($__internal_0ee1ee1012f75cb47c80110f2650d0116ad89f3eb112cbf44698e9a951c62195_prof);

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
    public function getavatar($__image__ = null, $__alt__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d7ad095f4028267ffab87ce7019df17c774b22e14b16ad0ca45ca24f164b65dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d7ad095f4028267ffab87ce7019df17c774b22e14b16ad0ca45ca24f164b65dc->enter($__internal_d7ad095f4028267ffab87ce7019df17c774b22e14b16ad0ca45ca24f164b65dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_68dd748b6f7a7a2b5daedc742a17b893bfd19fc007b6beacf3a7479fb9449e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_68dd748b6f7a7a2b5daedc742a17b893bfd19fc007b6beacf3a7479fb9449e21->enter($__internal_68dd748b6f7a7a2b5daedc742a17b893bfd19fc007b6beacf3a7479fb9449e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            // line 31
            echo "    ";
            if (($context["image"] ?? $this->getContext($context, "image"))) {
                // line 32
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["image"] ?? $this->getContext($context, "image"))), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 34
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/avanzuadmintheme/img/avatar.png"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            }
            
            $__internal_68dd748b6f7a7a2b5daedc742a17b893bfd19fc007b6beacf3a7479fb9449e21->leave($__internal_68dd748b6f7a7a2b5daedc742a17b893bfd19fc007b6beacf3a7479fb9449e21_prof);

            
            $__internal_d7ad095f4028267ffab87ce7019df17c774b22e14b16ad0ca45ca24f164b65dc->leave($__internal_d7ad095f4028267ffab87ce7019df17c774b22e14b16ad0ca45ca24f164b65dc_prof);

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
    public function getmenu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ae511fbd98ca4824d5884ee238797d030fd9a80b43eea235218ef65c89422742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ae511fbd98ca4824d5884ee238797d030fd9a80b43eea235218ef65c89422742->enter($__internal_ae511fbd98ca4824d5884ee238797d030fd9a80b43eea235218ef65c89422742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_b2840bf2b98a1368762fae9be648296232dacac78de8a6364480c64d8231ba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b2840bf2b98a1368762fae9be648296232dacac78de8a6364480c64d8231ba4f->enter($__internal_b2840bf2b98a1368762fae9be648296232dacac78de8a6364480c64d8231ba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 39
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()) || $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()))) {
                // line 40
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "identifier", array()), "html", null, true);
                echo "\" class=\" ";
                echo (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) ? ("#") : (((twig_in_filter("/", $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()))) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "routeArgs", array())))))), "html", null, true);
                echo "\">
                ";
                // line 42
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array())) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                // line 43
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "</span>
                ";
                // line 44
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array())) {
                    // line 45
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
                ";
                }
                // line 47
                echo "                ";
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 48
                echo "            </a>

            ";
                // line 50
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array())) {
                    // line 51
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "
            ";
                // line 66
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array())) {
                    // line 67
                    echo "                <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
            ";
                }
                // line 69
                echo "        </li>
    ";
            }
            
            $__internal_b2840bf2b98a1368762fae9be648296232dacac78de8a6364480c64d8231ba4f->leave($__internal_b2840bf2b98a1368762fae9be648296232dacac78de8a6364480c64d8231ba4f_prof);

            
            $__internal_ae511fbd98ca4824d5884ee238797d030fd9a80b43eea235218ef65c89422742->leave($__internal_ae511fbd98ca4824d5884ee238797d030fd9a80b43eea235218ef65c89422742_prof);

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
", "AvanzuAdminThemeBundle:layout:macros.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/layout/macros.html.twig");
    }
}
