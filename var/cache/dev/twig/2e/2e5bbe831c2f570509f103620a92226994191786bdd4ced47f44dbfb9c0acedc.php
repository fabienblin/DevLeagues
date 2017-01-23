<?php

/* @SonataCore/FlashMessage/render.html.twig */
class __TwigTemplate_0caf5c0df42e26e6befbd016dc00ca7a40dd39c06db6d560b36a5c90636685ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c155df8ee040d7c8e848bef1b72eed95e38dd0d8e6b0df0392ffc8783c057a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c155df8ee040d7c8e848bef1b72eed95e38dd0d8e6b0df0392ffc8783c057a->enter($__internal_46c155df8ee040d7c8e848bef1b72eed95e38dd0d8e6b0df0392ffc8783c057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/FlashMessage/render.html.twig"));

        $__internal_6f05dba2b0d06143f3cb7be0610406b86c1a14bbdf93251c1e11e332564ab8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f05dba2b0d06143f3cb7be0610406b86c1a14bbdf93251c1e11e332564ab8b9->enter($__internal_6f05dba2b0d06143f3cb7be0610406b86c1a14bbdf93251c1e11e332564ab8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/FlashMessage/render.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? (($context["domain"] ?? $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessages($context["type"], ($context["domain"] ?? $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\CoreBundle\Twig\Extension\StatusExtension')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_46c155df8ee040d7c8e848bef1b72eed95e38dd0d8e6b0df0392ffc8783c057a->leave($__internal_46c155df8ee040d7c8e848bef1b72eed95e38dd0d8e6b0df0392ffc8783c057a_prof);

        
        $__internal_6f05dba2b0d06143f3cb7be0610406b86c1a14bbdf93251c1e11e332564ab8b9->leave($__internal_6f05dba2b0d06143f3cb7be0610406b86c1a14bbdf93251c1e11e332564ab8b9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/FlashMessage/render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 14,  32 => 13,  29 => 12,  25 => 11,);
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
{% for type in sonata_flashmessages_types() %}
    {% set domain = domain is defined ? domain : null %}
    {% for message in sonata_flashmessages_get(type, domain) %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            {{ message|raw }}
        </div>
    {% endfor %}
{% endfor %}
", "@SonataCore/FlashMessage/render.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/core-bundle/Resources/views/FlashMessage/render.html.twig");
    }
}
