<?php

/* @SonataAdmin/Block/block_rss_dashboard.html.twig */
class __TwigTemplate_ed82567667ad21c94f96ccd8cc6df3643344278802ca9b37562a1d9a7ec1191a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "@SonataAdmin/Block/block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb91e635ae52372fc4bac1765c19d2f09e55721be16df61bcea734731afb393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb91e635ae52372fc4bac1765c19d2f09e55721be16df61bcea734731afb393->enter($__internal_3bb91e635ae52372fc4bac1765c19d2f09e55721be16df61bcea734731afb393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $__internal_65aafbe14f4e47bdac8f49ee7ced05616eb2c247ed86906f56413726beb7be12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65aafbe14f4e47bdac8f49ee7ced05616eb2c247ed86906f56413726beb7be12->enter($__internal_65aafbe14f4e47bdac8f49ee7ced05616eb2c247ed86906f56413726beb7be12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb91e635ae52372fc4bac1765c19d2f09e55721be16df61bcea734731afb393->leave($__internal_3bb91e635ae52372fc4bac1765c19d2f09e55721be16df61bcea734731afb393_prof);

        
        $__internal_65aafbe14f4e47bdac8f49ee7ced05616eb2c247ed86906f56413726beb7be12->leave($__internal_65aafbe14f4e47bdac8f49ee7ced05616eb2c247ed86906f56413726beb7be12_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b8d3656ecf0dec162a06f3879a60625bb384134e2ff1adff2b8a0befb9694268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d3656ecf0dec162a06f3879a60625bb384134e2ff1adff2b8a0befb9694268->enter($__internal_b8d3656ecf0dec162a06f3879a60625bb384134e2ff1adff2b8a0befb9694268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_bd9ded4746b0364d5ec689b73c517d05fdddd65f23f6398e322da4787a352052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9ded4746b0364d5ec689b73c517d05fdddd65f23f6398e322da4787a352052->enter($__internal_bd9ded4746b0364d5ec689b73c517d05fdddd65f23f6398e322da4787a352052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_bd9ded4746b0364d5ec689b73c517d05fdddd65f23f6398e322da4787a352052->leave($__internal_bd9ded4746b0364d5ec689b73c517d05fdddd65f23f6398e322da4787a352052_prof);

        
        $__internal_b8d3656ecf0dec162a06f3879a60625bb384134e2ff1adff2b8a0befb9694268->leave($__internal_b8d3656ecf0dec162a06f3879a60625bb384134e2ff1adff2b8a0befb9694268_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_rss_dashboard.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}
