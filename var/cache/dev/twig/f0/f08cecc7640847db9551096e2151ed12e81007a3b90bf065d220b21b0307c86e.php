<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_1c73bd9804dce81596874d61185c89715b9a1bc0e5cb2e5c7661cd8c5886ce9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7b2531d94db62da5f4589f7a5c1b23bca4b13ea553f3e590e496110c758d633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b2531d94db62da5f4589f7a5c1b23bca4b13ea553f3e590e496110c758d633->enter($__internal_d7b2531d94db62da5f4589f7a5c1b23bca4b13ea553f3e590e496110c758d633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $__internal_ffd51df91434781e2ba1893714f759e76d0d76c5f7e0e1ef70b12ec111e48de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd51df91434781e2ba1893714f759e76d0d76c5f7e0e1ef70b12ec111e48de0->enter($__internal_ffd51df91434781e2ba1893714f759e76d0d76c5f7e0e1ef70b12ec111e48de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b2531d94db62da5f4589f7a5c1b23bca4b13ea553f3e590e496110c758d633->leave($__internal_d7b2531d94db62da5f4589f7a5c1b23bca4b13ea553f3e590e496110c758d633_prof);

        
        $__internal_ffd51df91434781e2ba1893714f759e76d0d76c5f7e0e1ef70b12ec111e48de0->leave($__internal_ffd51df91434781e2ba1893714f759e76d0d76c5f7e0e1ef70b12ec111e48de0_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c4e41735f2f264175515cc3da427b9c5c9771c9ec4002f227d27f3f9f8ead7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4e41735f2f264175515cc3da427b9c5c9771c9ec4002f227d27f3f9f8ead7c->enter($__internal_4c4e41735f2f264175515cc3da427b9c5c9771c9ec4002f227d27f3f9f8ead7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3992ad41fd758b76ac9a926d868801fb4facee84c5c26e01a029d7255fb226f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3992ad41fd758b76ac9a926d868801fb4facee84c5c26e01a029d7255fb226f2->enter($__internal_3992ad41fd758b76ac9a926d868801fb4facee84c5c26e01a029d7255fb226f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 24
        echo "    ";
        echo $this->getAttribute($this, "render_array", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
        echo "
";
        
        $__internal_3992ad41fd758b76ac9a926d868801fb4facee84c5c26e01a029d7255fb226f2->leave($__internal_3992ad41fd758b76ac9a926d868801fb4facee84c5c26e01a029d7255fb226f2_prof);

        
        $__internal_4c4e41735f2f264175515cc3da427b9c5c9771c9ec4002f227d27f3f9f8ead7c->leave($__internal_4c4e41735f2f264175515cc3da427b9c5c9771c9ec4002f227d27f3f9f8ead7c_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3e8cee7f58086d9f2a8959391c194fe30c3004aadc9772616b1a48b3755403d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3e8cee7f58086d9f2a8959391c194fe30c3004aadc9772616b1a48b3755403d6->enter($__internal_3e8cee7f58086d9f2a8959391c194fe30c3004aadc9772616b1a48b3755403d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_a61897dd164412260c55d291dca4ed32d0711f0095d3caef017bbda6b550f5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a61897dd164412260c55d291dca4ed32d0711f0095d3caef017bbda6b550f5dc->enter($__internal_a61897dd164412260c55d291dca4ed32d0711f0095d3caef017bbda6b550f5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"]), "method");
                    echo "}]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_a61897dd164412260c55d291dca4ed32d0711f0095d3caef017bbda6b550f5dc->leave($__internal_a61897dd164412260c55d291dca4ed32d0711f0095d3caef017bbda6b550f5dc_prof);

            
            $__internal_3e8cee7f58086d9f2a8959391c194fe30c3004aadc9772616b1a48b3755403d6->leave($__internal_3e8cee7f58086d9f2a8959391c194fe30c3004aadc9772616b1a48b3755403d6_prof);

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
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  95 => 16,  87 => 14,  84 => 13,  79 => 12,  61 => 11,  48 => 24,  39 => 23,  18 => 21,);
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
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ _self.render_array(value) }}
{% endblock %}
", "@SonataAdmin/CRUD/list_array.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
