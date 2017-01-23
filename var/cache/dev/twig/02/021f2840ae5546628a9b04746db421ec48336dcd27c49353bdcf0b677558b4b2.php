<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_c8e92359907e8be33718064e7e5e7a85097bcb9223760744e27611e6e94138e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_666867bf45d89fb70dc587e4e89da965218f11e04fbb3aa0e26ea95b4573036c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666867bf45d89fb70dc587e4e89da965218f11e04fbb3aa0e26ea95b4573036c->enter($__internal_666867bf45d89fb70dc587e4e89da965218f11e04fbb3aa0e26ea95b4573036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_66d1756f43718bfbc5c0a3adeab843cf9fcff86c0a9c7d43abc74208db30b3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d1756f43718bfbc5c0a3adeab843cf9fcff86c0a9c7d43abc74208db30b3e3->enter($__internal_66d1756f43718bfbc5c0a3adeab843cf9fcff86c0a9c7d43abc74208db30b3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter(($context["is_diff"] ?? $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_666867bf45d89fb70dc587e4e89da965218f11e04fbb3aa0e26ea95b4573036c->leave($__internal_666867bf45d89fb70dc587e4e89da965218f11e04fbb3aa0e26ea95b4573036c_prof);

        
        $__internal_66d1756f43718bfbc5c0a3adeab843cf9fcff86c0a9c7d43abc74208db30b3e3->leave($__internal_66d1756f43718bfbc5c0a3adeab843cf9fcff86c0a9c7d43abc74208db30b3e3_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_1ea76f53b48f0758016ba16de8787e61008339e7c634b45fba934b3d96afb117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea76f53b48f0758016ba16de8787e61008339e7c634b45fba934b3d96afb117->enter($__internal_1ea76f53b48f0758016ba16de8787e61008339e7c634b45fba934b3d96afb117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_6fdceb75c3709dfd6402d9c994518e060512bcac1ca9c32efa6cffd3558ec9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdceb75c3709dfd6402d9c994518e060512bcac1ca9c32efa6cffd3558ec9df->enter($__internal_6fdceb75c3709dfd6402d9c994518e060512bcac1ca9c32efa6cffd3558ec9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_6fdceb75c3709dfd6402d9c994518e060512bcac1ca9c32efa6cffd3558ec9df->leave($__internal_6fdceb75c3709dfd6402d9c994518e060512bcac1ca9c32efa6cffd3558ec9df_prof);

        
        $__internal_1ea76f53b48f0758016ba16de8787e61008339e7c634b45fba934b3d96afb117->leave($__internal_1ea76f53b48f0758016ba16de8787e61008339e7c634b45fba934b3d96afb117_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_113ec9225ca7a7cd21627c546afde0546f4a58b0b2af88d7f6647921d9e94ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113ec9225ca7a7cd21627c546afde0546f4a58b0b2af88d7f6647921d9e94ae4->enter($__internal_113ec9225ca7a7cd21627c546afde0546f4a58b0b2af88d7f6647921d9e94ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2d8c9124dc4781e421a247b2c8f0803dbbdde6fc2b69a6834dd31b0aa5938419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8c9124dc4781e421a247b2c8f0803dbbdde6fc2b69a6834dd31b0aa5938419->enter($__internal_2d8c9124dc4781e421a247b2c8f0803dbbdde6fc2b69a6834dd31b0aa5938419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2d8c9124dc4781e421a247b2c8f0803dbbdde6fc2b69a6834dd31b0aa5938419->leave($__internal_2d8c9124dc4781e421a247b2c8f0803dbbdde6fc2b69a6834dd31b0aa5938419_prof);

        
        $__internal_113ec9225ca7a7cd21627c546afde0546f4a58b0b2af88d7f6647921d9e94ae4->leave($__internal_113ec9225ca7a7cd21627c546afde0546f4a58b0b2af88d7f6647921d9e94ae4_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_a7c58004f069d4fa815a037f0679b0ace26dc718534ad83b337ff0b5bc2d388e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c58004f069d4fa815a037f0679b0ace26dc718534ad83b337ff0b5bc2d388e->enter($__internal_a7c58004f069d4fa815a037f0679b0ace26dc718534ad83b337ff0b5bc2d388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_00a3f027f714cc04da678c98744e59baaf67cc05a11c0f02a8eb2759e1a3ca43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a3f027f714cc04da678c98744e59baaf67cc05a11c0f02a8eb2759e1a3ca43->enter($__internal_00a3f027f714cc04da678c98744e59baaf67cc05a11c0f02a8eb2759e1a3ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo ($context["value"] ?? $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_00a3f027f714cc04da678c98744e59baaf67cc05a11c0f02a8eb2759e1a3ca43->leave($__internal_00a3f027f714cc04da678c98744e59baaf67cc05a11c0f02a8eb2759e1a3ca43_prof);

        
        $__internal_a7c58004f069d4fa815a037f0679b0ace26dc718534ad83b337ff0b5bc2d388e->leave($__internal_a7c58004f069d4fa815a037f0679b0ace26dc718534ad83b337ff0b5bc2d388e_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_24800c0578e47dc3a43ea08e40ca2af9796c8f15bd83d9491184acf1763afaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24800c0578e47dc3a43ea08e40ca2af9796c8f15bd83d9491184acf1763afaac->enter($__internal_24800c0578e47dc3a43ea08e40ca2af9796c8f15bd83d9491184acf1763afaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_72844f7a9b73dc48d9919aa70afb8baae21be334048b8fdf07b10fcd213b24a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72844f7a9b73dc48d9919aa70afb8baae21be334048b8fdf07b10fcd213b24a1->enter($__internal_72844f7a9b73dc48d9919aa70afb8baae21be334048b8fdf07b10fcd213b24a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = ($context["value_compare"] ?? $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_72844f7a9b73dc48d9919aa70afb8baae21be334048b8fdf07b10fcd213b24a1->leave($__internal_72844f7a9b73dc48d9919aa70afb8baae21be334048b8fdf07b10fcd213b24a1_prof);

        
        $__internal_24800c0578e47dc3a43ea08e40ca2af9796c8f15bd83d9491184acf1763afaac->leave($__internal_24800c0578e47dc3a43ea08e40ca2af9796c8f15bd83d9491184acf1763afaac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
