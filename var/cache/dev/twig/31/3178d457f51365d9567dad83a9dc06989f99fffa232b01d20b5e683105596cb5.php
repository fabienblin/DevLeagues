<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_fcf96fc953997424f7e767280c85e2014fabce9170821d2c3b6679e97773e7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa66835a23a0b04c95362dcd78c19ecf308b8f5a5cd91f02d1a9ad80544a8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa66835a23a0b04c95362dcd78c19ecf308b8f5a5cd91f02d1a9ad80544a8ed->enter($__internal_7aa66835a23a0b04c95362dcd78c19ecf308b8f5a5cd91f02d1a9ad80544a8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $__internal_777c6b13cef64aab1742b386af418b27ffb5a132c7956834426569f81eebdbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777c6b13cef64aab1742b386af418b27ffb5a132c7956834426569f81eebdbed->enter($__internal_777c6b13cef64aab1742b386af418b27ffb5a132c7956834426569f81eebdbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa66835a23a0b04c95362dcd78c19ecf308b8f5a5cd91f02d1a9ad80544a8ed->leave($__internal_7aa66835a23a0b04c95362dcd78c19ecf308b8f5a5cd91f02d1a9ad80544a8ed_prof);

        
        $__internal_777c6b13cef64aab1742b386af418b27ffb5a132c7956834426569f81eebdbed->leave($__internal_777c6b13cef64aab1742b386af418b27ffb5a132c7956834426569f81eebdbed_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a3331e060b530ade2e98faa497375e6ae1f1e4edcc433e7aeea12d0273dda604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3331e060b530ade2e98faa497375e6ae1f1e4edcc433e7aeea12d0273dda604->enter($__internal_a3331e060b530ade2e98faa497375e6ae1f1e4edcc433e7aeea12d0273dda604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6f3df46b03fc0f7161b1599a5f97bee29db0c268c54af127f4515568bed84aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3df46b03fc0f7161b1599a5f97bee29db0c268c54af127f4515568bed84aef->enter($__internal_6f3df46b03fc0f7161b1599a5f97bee29db0c268c54af127f4515568bed84aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_6f3df46b03fc0f7161b1599a5f97bee29db0c268c54af127f4515568bed84aef->leave($__internal_6f3df46b03fc0f7161b1599a5f97bee29db0c268c54af127f4515568bed84aef_prof);

        
        $__internal_a3331e060b530ade2e98faa497375e6ae1f1e4edcc433e7aeea12d0273dda604->leave($__internal_a3331e060b530ade2e98faa497375e6ae1f1e4edcc433e7aeea12d0273dda604_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "@SonataBlock/Block/block_core_menu.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
