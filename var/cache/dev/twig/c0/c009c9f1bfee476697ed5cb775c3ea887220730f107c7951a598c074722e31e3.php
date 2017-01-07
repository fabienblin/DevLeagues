<?php

/* knp_menu.html.twig */
class __TwigTemplate_0679153d970ceba2308e8de1f5d14a21f935046ad6cf0a5111fe6b0469df3080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f02476d204608ce3060f3db3bec01d6ded25ab15123060d04f3f1dc98a8c866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f02476d204608ce3060f3db3bec01d6ded25ab15123060d04f3f1dc98a8c866->enter($__internal_8f02476d204608ce3060f3db3bec01d6ded25ab15123060d04f3f1dc98a8c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_e85bcbc30882a9ee274a632157f4ae43e7c92edcab68cf11c34f058bad99fca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85bcbc30882a9ee274a632157f4ae43e7c92edcab68cf11c34f058bad99fca4->enter($__internal_e85bcbc30882a9ee274a632157f4ae43e7c92edcab68cf11c34f058bad99fca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f02476d204608ce3060f3db3bec01d6ded25ab15123060d04f3f1dc98a8c866->leave($__internal_8f02476d204608ce3060f3db3bec01d6ded25ab15123060d04f3f1dc98a8c866_prof);

        
        $__internal_e85bcbc30882a9ee274a632157f4ae43e7c92edcab68cf11c34f058bad99fca4->leave($__internal_e85bcbc30882a9ee274a632157f4ae43e7c92edcab68cf11c34f058bad99fca4_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_527b779990b85d7b2616cdb40dc744e6992de3cf0d786f4d045e89273ab2bbe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527b779990b85d7b2616cdb40dc744e6992de3cf0d786f4d045e89273ab2bbe9->enter($__internal_527b779990b85d7b2616cdb40dc744e6992de3cf0d786f4d045e89273ab2bbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_4a0992705d9734411f6efb4104330f2c3d22ce297b53b0fa01663b489480757d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0992705d9734411f6efb4104330f2c3d22ce297b53b0fa01663b489480757d->enter($__internal_4a0992705d9734411f6efb4104330f2c3d22ce297b53b0fa01663b489480757d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4a0992705d9734411f6efb4104330f2c3d22ce297b53b0fa01663b489480757d->leave($__internal_4a0992705d9734411f6efb4104330f2c3d22ce297b53b0fa01663b489480757d_prof);

        
        $__internal_527b779990b85d7b2616cdb40dc744e6992de3cf0d786f4d045e89273ab2bbe9->leave($__internal_527b779990b85d7b2616cdb40dc744e6992de3cf0d786f4d045e89273ab2bbe9_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_3b60995bb1fdb4b05852c867b9d8e40ba86da235d2ea848a64358bd1112f9f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b60995bb1fdb4b05852c867b9d8e40ba86da235d2ea848a64358bd1112f9f7b->enter($__internal_3b60995bb1fdb4b05852c867b9d8e40ba86da235d2ea848a64358bd1112f9f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_99207c1ada8e7bc065e115428ca9d83455ed552020bb1048e041c57e2f479811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99207c1ada8e7bc065e115428ca9d83455ed552020bb1048e041c57e2f479811->enter($__internal_99207c1ada8e7bc065e115428ca9d83455ed552020bb1048e041c57e2f479811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_99207c1ada8e7bc065e115428ca9d83455ed552020bb1048e041c57e2f479811->leave($__internal_99207c1ada8e7bc065e115428ca9d83455ed552020bb1048e041c57e2f479811_prof);

        
        $__internal_3b60995bb1fdb4b05852c867b9d8e40ba86da235d2ea848a64358bd1112f9f7b->leave($__internal_3b60995bb1fdb4b05852c867b9d8e40ba86da235d2ea848a64358bd1112f9f7b_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_f3ac319ac664f11ede40882744fcd98712bd06b3355696cdcfb6c86ad8fbcbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ac319ac664f11ede40882744fcd98712bd06b3355696cdcfb6c86ad8fbcbb3->enter($__internal_f3ac319ac664f11ede40882744fcd98712bd06b3355696cdcfb6c86ad8fbcbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_fb09f9416244d7e6ea716ab8dcac1129377be966312069924a892b62c9949d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb09f9416244d7e6ea716ab8dcac1129377be966312069924a892b62c9949d68->enter($__internal_fb09f9416244d7e6ea716ab8dcac1129377be966312069924a892b62c9949d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_fb09f9416244d7e6ea716ab8dcac1129377be966312069924a892b62c9949d68->leave($__internal_fb09f9416244d7e6ea716ab8dcac1129377be966312069924a892b62c9949d68_prof);

        
        $__internal_f3ac319ac664f11ede40882744fcd98712bd06b3355696cdcfb6c86ad8fbcbb3->leave($__internal_f3ac319ac664f11ede40882744fcd98712bd06b3355696cdcfb6c86ad8fbcbb3_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_a8931d7729fb701292b7a09185cbd8afb403b8afe478bb3fa89f7f240adab59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8931d7729fb701292b7a09185cbd8afb403b8afe478bb3fa89f7f240adab59a->enter($__internal_a8931d7729fb701292b7a09185cbd8afb403b8afe478bb3fa89f7f240adab59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_7808c279084ef050b7d407b87c32e998a9da104e541f76a5febe6e4d882798e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7808c279084ef050b7d407b87c32e998a9da104e541f76a5febe6e4d882798e9->enter($__internal_7808c279084ef050b7d407b87c32e998a9da104e541f76a5febe6e4d882798e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_7808c279084ef050b7d407b87c32e998a9da104e541f76a5febe6e4d882798e9->leave($__internal_7808c279084ef050b7d407b87c32e998a9da104e541f76a5febe6e4d882798e9_prof);

        
        $__internal_a8931d7729fb701292b7a09185cbd8afb403b8afe478bb3fa89f7f240adab59a->leave($__internal_a8931d7729fb701292b7a09185cbd8afb403b8afe478bb3fa89f7f240adab59a_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_288c175f05145873b9d9d529e5d5de4cd788e5da9a85b5a2d2460adb65f90568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288c175f05145873b9d9d529e5d5de4cd788e5da9a85b5a2d2460adb65f90568->enter($__internal_288c175f05145873b9d9d529e5d5de4cd788e5da9a85b5a2d2460adb65f90568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_31b5b0f221a3c8ea6ac7ba9a6b256a884750bffa810eac9b2914260d5d543de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b5b0f221a3c8ea6ac7ba9a6b256a884750bffa810eac9b2914260d5d543de9->enter($__internal_31b5b0f221a3c8ea6ac7ba9a6b256a884750bffa810eac9b2914260d5d543de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_31b5b0f221a3c8ea6ac7ba9a6b256a884750bffa810eac9b2914260d5d543de9->leave($__internal_31b5b0f221a3c8ea6ac7ba9a6b256a884750bffa810eac9b2914260d5d543de9_prof);

        
        $__internal_288c175f05145873b9d9d529e5d5de4cd788e5da9a85b5a2d2460adb65f90568->leave($__internal_288c175f05145873b9d9d529e5d5de4cd788e5da9a85b5a2d2460adb65f90568_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_369f4ca842ac727fe0e201c6664f1e5cc4dcbef3873d6084f419d8c54413618e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369f4ca842ac727fe0e201c6664f1e5cc4dcbef3873d6084f419d8c54413618e->enter($__internal_369f4ca842ac727fe0e201c6664f1e5cc4dcbef3873d6084f419d8c54413618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_952becb75b03330943b589404bd152dc3d9dc1e1895beff8e753dd2d64c1c094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952becb75b03330943b589404bd152dc3d9dc1e1895beff8e753dd2d64c1c094->enter($__internal_952becb75b03330943b589404bd152dc3d9dc1e1895beff8e753dd2d64c1c094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_952becb75b03330943b589404bd152dc3d9dc1e1895beff8e753dd2d64c1c094->leave($__internal_952becb75b03330943b589404bd152dc3d9dc1e1895beff8e753dd2d64c1c094_prof);

        
        $__internal_369f4ca842ac727fe0e201c6664f1e5cc4dcbef3873d6084f419d8c54413618e->leave($__internal_369f4ca842ac727fe0e201c6664f1e5cc4dcbef3873d6084f419d8c54413618e_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_de64f8afc7b3b64e4f08d054ea41fabe688192b72d4ffd8b46997b662a0a7b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de64f8afc7b3b64e4f08d054ea41fabe688192b72d4ffd8b46997b662a0a7b0f->enter($__internal_de64f8afc7b3b64e4f08d054ea41fabe688192b72d4ffd8b46997b662a0a7b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_0dc164397ee9dab10e8c17345268922179a54a78919b238f7bb29518ec2e5eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc164397ee9dab10e8c17345268922179a54a78919b238f7bb29518ec2e5eee->enter($__internal_0dc164397ee9dab10e8c17345268922179a54a78919b238f7bb29518ec2e5eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_0dc164397ee9dab10e8c17345268922179a54a78919b238f7bb29518ec2e5eee->leave($__internal_0dc164397ee9dab10e8c17345268922179a54a78919b238f7bb29518ec2e5eee_prof);

        
        $__internal_de64f8afc7b3b64e4f08d054ea41fabe688192b72d4ffd8b46997b662a0a7b0f->leave($__internal_de64f8afc7b3b64e4f08d054ea41fabe688192b72d4ffd8b46997b662a0a7b0f_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_98ead03144b3d49863b3ef8464698b74b8bc4587614bc5a5c36262f107d1c326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ead03144b3d49863b3ef8464698b74b8bc4587614bc5a5c36262f107d1c326->enter($__internal_98ead03144b3d49863b3ef8464698b74b8bc4587614bc5a5c36262f107d1c326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_6035c28dcfe03452abc715e8b40da967db936a7c009b9e6539c85f5e3576b212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6035c28dcfe03452abc715e8b40da967db936a7c009b9e6539c85f5e3576b212->enter($__internal_6035c28dcfe03452abc715e8b40da967db936a7c009b9e6539c85f5e3576b212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_6035c28dcfe03452abc715e8b40da967db936a7c009b9e6539c85f5e3576b212->leave($__internal_6035c28dcfe03452abc715e8b40da967db936a7c009b9e6539c85f5e3576b212_prof);

        
        $__internal_98ead03144b3d49863b3ef8464698b74b8bc4587614bc5a5c36262f107d1c326->leave($__internal_98ead03144b3d49863b3ef8464698b74b8bc4587614bc5a5c36262f107d1c326_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d3bca69589faf3de6a7703771a644581029f046d5bf2709f32f3f997b9598f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d3bca69589faf3de6a7703771a644581029f046d5bf2709f32f3f997b9598f6e->enter($__internal_d3bca69589faf3de6a7703771a644581029f046d5bf2709f32f3f997b9598f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_c2520ee86806185d0b3d931df1593a99af2b56bcfeccee7ef49894825421faab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c2520ee86806185d0b3d931df1593a99af2b56bcfeccee7ef49894825421faab->enter($__internal_c2520ee86806185d0b3d931df1593a99af2b56bcfeccee7ef49894825421faab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_c2520ee86806185d0b3d931df1593a99af2b56bcfeccee7ef49894825421faab->leave($__internal_c2520ee86806185d0b3d931df1593a99af2b56bcfeccee7ef49894825421faab_prof);

            
            $__internal_d3bca69589faf3de6a7703771a644581029f046d5bf2709f32f3f997b9598f6e->leave($__internal_d3bca69589faf3de6a7703771a644581029f046d5bf2709f32f3f997b9598f6e_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/var/www/html/devleagues/github/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
