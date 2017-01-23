<?php

/* @SonataAdmin/CRUD/base_show_macro.html.twig */
class __TwigTemplate_9fffaa707f0a375a86398981c0bb4572c149cc455becfe2e90c8fd8b6b48eaba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba30764548583cc07dd39e1f48a60bad010a8fcee8ca9797b710252fd9598e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba30764548583cc07dd39e1f48a60bad010a8fcee8ca9797b710252fd9598e95->enter($__internal_ba30764548583cc07dd39e1f48a60bad010a8fcee8ca9797b710252fd9598e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_macro.html.twig"));

        $__internal_49d565e159c8492ac1fb292472ebcc0e21be2727d688309c2a3828a32d9ec4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d565e159c8492ac1fb292472ebcc0e21be2727d688309c2a3828a32d9ec4af->enter($__internal_49d565e159c8492ac1fb292472ebcc0e21be2727d688309c2a3828a32d9ec4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_ba30764548583cc07dd39e1f48a60bad010a8fcee8ca9797b710252fd9598e95->leave($__internal_ba30764548583cc07dd39e1f48a60bad010a8fcee8ca9797b710252fd9598e95_prof);

        
        $__internal_49d565e159c8492ac1fb292472ebcc0e21be2727d688309c2a3828a32d9ec4af->leave($__internal_49d565e159c8492ac1fb292472ebcc0e21be2727d688309c2a3828a32d9ec4af_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_bd3fd1a06c7ffbdec80fc354223f20ee23e5e3ce23738097d056ad1f2ab02725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3fd1a06c7ffbdec80fc354223f20ee23e5e3ce23738097d056ad1f2ab02725->enter($__internal_bd3fd1a06c7ffbdec80fc354223f20ee23e5e3ce23738097d056ad1f2ab02725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_9975b970c12ec49cdef5bb39fc26e6bf7da8c5ea5f1ceb4316d87d0b107a93d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9975b970c12ec49cdef5bb39fc26e6bf7da8c5ea5f1ceb4316d87d0b107a93d5->enter($__internal_9975b970c12ec49cdef5bb39fc26e6bf7da8c5ea5f1ceb4316d87d0b107a93d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((($context["no_padding"] ?? $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9975b970c12ec49cdef5bb39fc26e6bf7da8c5ea5f1ceb4316d87d0b107a93d5->leave($__internal_9975b970c12ec49cdef5bb39fc26e6bf7da8c5ea5f1ceb4316d87d0b107a93d5_prof);

        
        $__internal_bd3fd1a06c7ffbdec80fc354223f20ee23e5e3ce23738097d056ad1f2ab02725->leave($__internal_bd3fd1a06c7ffbdec80fc354223f20ee23e5e3ce23738097d056ad1f2ab02725_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_872c118154ad4f3e5d0d8f932b6df32b2c0059224460c33308899d0b414e4a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872c118154ad4f3e5d0d8f932b6df32b2c0059224460c33308899d0b414e4a92->enter($__internal_872c118154ad4f3e5d0d8f932b6df32b2c0059224460c33308899d0b414e4a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_1e978277ba39e3f71e75b6501f147a7570924c6f0b9ad35f475c273e11c5c57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e978277ba39e3f71e75b6501f147a7570924c6f0b9ad35f475c273e11c5c57a->enter($__internal_1e978277ba39e3f71e75b6501f147a7570924c6f0b9ad35f475c273e11c5c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_1e978277ba39e3f71e75b6501f147a7570924c6f0b9ad35f475c273e11c5c57a->leave($__internal_1e978277ba39e3f71e75b6501f147a7570924c6f0b9ad35f475c273e11c5c57a_prof);

        
        $__internal_872c118154ad4f3e5d0d8f932b6df32b2c0059224460c33308899d0b414e4a92->leave($__internal_872c118154ad4f3e5d0d8f932b6df32b2c0059224460c33308899d0b414e4a92_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_e620096730f4eaa2dc20b90cf583f691b2739d26e5ba20400c9ef7612569648a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e620096730f4eaa2dc20b90cf583f691b2739d26e5ba20400c9ef7612569648a->enter($__internal_e620096730f4eaa2dc20b90cf583f691b2739d26e5ba20400c9ef7612569648a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_2bc0723a66753f7cca86eecb2a581d416c93689c84411ac658ee0bff8d5249d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc0723a66753f7cca86eecb2a581d416c93689c84411ac658ee0bff8d5249d1->enter($__internal_2bc0723a66753f7cca86eecb2a581d416c93689c84411ac658ee0bff8d5249d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_2bc0723a66753f7cca86eecb2a581d416c93689c84411ac658ee0bff8d5249d1->leave($__internal_2bc0723a66753f7cca86eecb2a581d416c93689c84411ac658ee0bff8d5249d1_prof);

        
        $__internal_e620096730f4eaa2dc20b90cf583f691b2739d26e5ba20400c9ef7612569648a->leave($__internal_e620096730f4eaa2dc20b90cf583f691b2739d26e5ba20400c9ef7612569648a_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8ff8bad923bf50f1272fa45d03525d203b4f2ae02312120c02921deaadbe45aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8ff8bad923bf50f1272fa45d03525d203b4f2ae02312120c02921deaadbe45aa->enter($__internal_8ff8bad923bf50f1272fa45d03525d203b4f2ae02312120c02921deaadbe45aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_28206af2e8183951c905037e92da9b961e09f5e5e154b7925e8405d3124c9521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_28206af2e8183951c905037e92da9b961e09f5e5e154b7925e8405d3124c9521->enter($__internal_28206af2e8183951c905037e92da9b961e09f5e5e154b7925e8405d3124c9521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_28206af2e8183951c905037e92da9b961e09f5e5e154b7925e8405d3124c9521->leave($__internal_28206af2e8183951c905037e92da9b961e09f5e5e154b7925e8405d3124c9521_prof);

            
            $__internal_8ff8bad923bf50f1272fa45d03525d203b4f2ae02312120c02921deaadbe45aa->leave($__internal_8ff8bad923bf50f1272fa45d03525d203b4f2ae02312120c02921deaadbe45aa_prof);

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
        return "@SonataAdmin/CRUD/base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.name|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@SonataAdmin/CRUD/base_show_macro.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
