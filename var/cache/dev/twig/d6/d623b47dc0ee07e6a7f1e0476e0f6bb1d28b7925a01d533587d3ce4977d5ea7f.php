<?php

/* @AvanzuAdminTheme/layout/macros.html.twig */
class __TwigTemplate_9f2b21d0dbb403e43c84c8d2d69071ba0a1323a72cc7d9219c3ce764f3fd32f7 extends Twig_Template
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
        $__internal_3fe304e6b5645b13bc01fd604ecdac9ad61a02ea6cd48a10562893fde80d48ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe304e6b5645b13bc01fd604ecdac9ad61a02ea6cd48a10562893fde80d48ef->enter($__internal_3fe304e6b5645b13bc01fd604ecdac9ad61a02ea6cd48a10562893fde80d48ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

        $__internal_d130d0df9523cdeca680b8aece81518447c0d1c12dd2dbe44c500c154de7d409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d130d0df9523cdeca680b8aece81518447c0d1c12dd2dbe44c500c154de7d409->enter($__internal_d130d0df9523cdeca680b8aece81518447c0d1c12dd2dbe44c500c154de7d409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

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
        
        $__internal_3fe304e6b5645b13bc01fd604ecdac9ad61a02ea6cd48a10562893fde80d48ef->leave($__internal_3fe304e6b5645b13bc01fd604ecdac9ad61a02ea6cd48a10562893fde80d48ef_prof);

        
        $__internal_d130d0df9523cdeca680b8aece81518447c0d1c12dd2dbe44c500c154de7d409->leave($__internal_d130d0df9523cdeca680b8aece81518447c0d1c12dd2dbe44c500c154de7d409_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_6c6c2d096fbb35b6b893094155a53093686e0e12665430ae0f85d4e2319a2423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6c2d096fbb35b6b893094155a53093686e0e12665430ae0f85d4e2319a2423->enter($__internal_6c6c2d096fbb35b6b893094155a53093686e0e12665430ae0f85d4e2319a2423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        $__internal_a04a79fcdba50fcdb938d09ea6a2028fec61e6cd5a1f37b84805e1e4b24b0074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04a79fcdba50fcdb938d09ea6a2028fec61e6cd5a1f37b84805e1e4b24b0074->enter($__internal_a04a79fcdba50fcdb938d09ea6a2028fec61e6cd5a1f37b84805e1e4b24b0074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_a04a79fcdba50fcdb938d09ea6a2028fec61e6cd5a1f37b84805e1e4b24b0074->leave($__internal_a04a79fcdba50fcdb938d09ea6a2028fec61e6cd5a1f37b84805e1e4b24b0074_prof);

        
        $__internal_6c6c2d096fbb35b6b893094155a53093686e0e12665430ae0f85d4e2319a2423->leave($__internal_6c6c2d096fbb35b6b893094155a53093686e0e12665430ae0f85d4e2319a2423_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_47006c91b70993e87347b26d072504b94e322c3ffc748482fdb978494ffbd299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47006c91b70993e87347b26d072504b94e322c3ffc748482fdb978494ffbd299->enter($__internal_47006c91b70993e87347b26d072504b94e322c3ffc748482fdb978494ffbd299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        $__internal_c134c1cdff9047157ccdcfb858effa6be01a3b5fdc4d66d23d5f6e5e20b2e6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c134c1cdff9047157ccdcfb858effa6be01a3b5fdc4d66d23d5f6e5e20b2e6d1->enter($__internal_c134c1cdff9047157ccdcfb858effa6be01a3b5fdc4d66d23d5f6e5e20b2e6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_c134c1cdff9047157ccdcfb858effa6be01a3b5fdc4d66d23d5f6e5e20b2e6d1->leave($__internal_c134c1cdff9047157ccdcfb858effa6be01a3b5fdc4d66d23d5f6e5e20b2e6d1_prof);

        
        $__internal_47006c91b70993e87347b26d072504b94e322c3ffc748482fdb978494ffbd299->leave($__internal_47006c91b70993e87347b26d072504b94e322c3ffc748482fdb978494ffbd299_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_7b133f14fa03586e31bec5b7b708674b9df26ad7a8e2c3e210770befe5c296e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b133f14fa03586e31bec5b7b708674b9df26ad7a8e2c3e210770befe5c296e8->enter($__internal_7b133f14fa03586e31bec5b7b708674b9df26ad7a8e2c3e210770befe5c296e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        $__internal_d98a33174331979d55cd3856238c4aed8ad97c4404777c97bc975733e797315c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98a33174331979d55cd3856238c4aed8ad97c4404777c97bc975733e797315c->enter($__internal_d98a33174331979d55cd3856238c4aed8ad97c4404777c97bc975733e797315c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

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
        
        $__internal_d98a33174331979d55cd3856238c4aed8ad97c4404777c97bc975733e797315c->leave($__internal_d98a33174331979d55cd3856238c4aed8ad97c4404777c97bc975733e797315c_prof);

        
        $__internal_7b133f14fa03586e31bec5b7b708674b9df26ad7a8e2c3e210770befe5c296e8->leave($__internal_7b133f14fa03586e31bec5b7b708674b9df26ad7a8e2c3e210770befe5c296e8_prof);

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
            $__internal_9726f941b380a1cbf5d8f8bc61fac74b8e3467755867f536fdce6f1fac6b39e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9726f941b380a1cbf5d8f8bc61fac74b8e3467755867f536fdce6f1fac6b39e1->enter($__internal_9726f941b380a1cbf5d8f8bc61fac74b8e3467755867f536fdce6f1fac6b39e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            $__internal_7023ad026335cd161a98b0b02608b406fdb2a7552a33320992a0cdd7f8c9d201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7023ad026335cd161a98b0b02608b406fdb2a7552a33320992a0cdd7f8c9d201->enter($__internal_7023ad026335cd161a98b0b02608b406fdb2a7552a33320992a0cdd7f8c9d201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

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
            
            $__internal_7023ad026335cd161a98b0b02608b406fdb2a7552a33320992a0cdd7f8c9d201->leave($__internal_7023ad026335cd161a98b0b02608b406fdb2a7552a33320992a0cdd7f8c9d201_prof);

            
            $__internal_9726f941b380a1cbf5d8f8bc61fac74b8e3467755867f536fdce6f1fac6b39e1->leave($__internal_9726f941b380a1cbf5d8f8bc61fac74b8e3467755867f536fdce6f1fac6b39e1_prof);

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
            $__internal_f5e5408d62097f488a98741cb553ed190a4d5a31a19d0f7c9a8826f2743189c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f5e5408d62097f488a98741cb553ed190a4d5a31a19d0f7c9a8826f2743189c6->enter($__internal_f5e5408d62097f488a98741cb553ed190a4d5a31a19d0f7c9a8826f2743189c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_164136ca9fa943cf674c878b7c35753c5a8987b2defdd25a719c74a5eddc9dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_164136ca9fa943cf674c878b7c35753c5a8987b2defdd25a719c74a5eddc9dd9->enter($__internal_164136ca9fa943cf674c878b7c35753c5a8987b2defdd25a719c74a5eddc9dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

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
            
            $__internal_164136ca9fa943cf674c878b7c35753c5a8987b2defdd25a719c74a5eddc9dd9->leave($__internal_164136ca9fa943cf674c878b7c35753c5a8987b2defdd25a719c74a5eddc9dd9_prof);

            
            $__internal_f5e5408d62097f488a98741cb553ed190a4d5a31a19d0f7c9a8826f2743189c6->leave($__internal_f5e5408d62097f488a98741cb553ed190a4d5a31a19d0f7c9a8826f2743189c6_prof);

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
            $__internal_50b97268dcc6c04df0c3f70618f554d6893864a42197051fb9481344a846ae44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_50b97268dcc6c04df0c3f70618f554d6893864a42197051fb9481344a846ae44->enter($__internal_50b97268dcc6c04df0c3f70618f554d6893864a42197051fb9481344a846ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_bc731186a7465a5c2d39dd94a36200b4c3cef583759387f39d8445932a365832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bc731186a7465a5c2d39dd94a36200b4c3cef583759387f39d8445932a365832->enter($__internal_bc731186a7465a5c2d39dd94a36200b4c3cef583759387f39d8445932a365832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

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
            
            $__internal_bc731186a7465a5c2d39dd94a36200b4c3cef583759387f39d8445932a365832->leave($__internal_bc731186a7465a5c2d39dd94a36200b4c3cef583759387f39d8445932a365832_prof);

            
            $__internal_50b97268dcc6c04df0c3f70618f554d6893864a42197051fb9481344a846ae44->leave($__internal_50b97268dcc6c04df0c3f70618f554d6893864a42197051fb9481344a846ae44_prof);

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
        return "@AvanzuAdminTheme/layout/macros.html.twig";
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
", "@AvanzuAdminTheme/layout/macros.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/layout/macros.html.twig");
    }
}
