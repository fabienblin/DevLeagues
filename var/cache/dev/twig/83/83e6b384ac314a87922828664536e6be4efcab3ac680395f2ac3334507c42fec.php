<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_c453e0fe4b9ebfa6e6b7f36a7e7d636a056a29baf4f34c7ed19b83131b74df76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_049c60ca5525340bc80dde5607f8f3b939886f9fd0d4fc8cd6522dda1864f6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049c60ca5525340bc80dde5607f8f3b939886f9fd0d4fc8cd6522dda1864f6fe->enter($__internal_049c60ca5525340bc80dde5607f8f3b939886f9fd0d4fc8cd6522dda1864f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        $__internal_55c4f326907b33256f48f6bf170adb8ebd37ad5fac11636ee351ccd149fc3115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c4f326907b33256f48f6bf170adb8ebd37ad5fac11636ee351ccd149fc3115->enter($__internal_55c4f326907b33256f48f6bf170adb8ebd37ad5fac11636ee351ccd149fc3115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_049c60ca5525340bc80dde5607f8f3b939886f9fd0d4fc8cd6522dda1864f6fe->leave($__internal_049c60ca5525340bc80dde5607f8f3b939886f9fd0d4fc8cd6522dda1864f6fe_prof);

        
        $__internal_55c4f326907b33256f48f6bf170adb8ebd37ad5fac11636ee351ccd149fc3115->leave($__internal_55c4f326907b33256f48f6bf170adb8ebd37ad5fac11636ee351ccd149fc3115_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_c9041edbe8f38fa45d4fc8eb565f2e89df0e6bdc472bd550f027c608f71d7f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9041edbe8f38fa45d4fc8eb565f2e89df0e6bdc472bd550f027c608f71d7f7f->enter($__internal_c9041edbe8f38fa45d4fc8eb565f2e89df0e6bdc472bd550f027c608f71d7f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4060998ffc783fc7eeec8972f31dbc9a9a1acc532fdb838f4c37314172ab2593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4060998ffc783fc7eeec8972f31dbc9a9a1acc532fdb838f4c37314172ab2593->enter($__internal_4060998ffc783fc7eeec8972f31dbc9a9a1acc532fdb838f4c37314172ab2593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4060998ffc783fc7eeec8972f31dbc9a9a1acc532fdb838f4c37314172ab2593->leave($__internal_4060998ffc783fc7eeec8972f31dbc9a9a1acc532fdb838f4c37314172ab2593_prof);

        
        $__internal_c9041edbe8f38fa45d4fc8eb565f2e89df0e6bdc472bd550f027c608f71d7f7f->leave($__internal_c9041edbe8f38fa45d4fc8eb565f2e89df0e6bdc472bd550f027c608f71d7f7f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "@SonataBlock/Block/block_base.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
