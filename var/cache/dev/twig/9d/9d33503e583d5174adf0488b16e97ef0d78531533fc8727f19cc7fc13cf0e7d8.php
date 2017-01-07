<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_e2aacbee59c023c960e11ac363f6333aafd1d68231aeea67c08fd8cac6b3c16c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78e3a1dcf35d5cadb0cee2f8e3b2eaf38e5cb9978ec4963fef1ab8423cc0ebb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e3a1dcf35d5cadb0cee2f8e3b2eaf38e5cb9978ec4963fef1ab8423cc0ebb3->enter($__internal_78e3a1dcf35d5cadb0cee2f8e3b2eaf38e5cb9978ec4963fef1ab8423cc0ebb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $__internal_8a5f5bdac7dcd306eac0c9b2a3e17ceca26f5a51bdf8618dc39f44ca65f21a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5f5bdac7dcd306eac0c9b2a3e17ceca26f5a51bdf8618dc39f44ca65f21a7d->enter($__internal_8a5f5bdac7dcd306eac0c9b2a3e17ceca26f5a51bdf8618dc39f44ca65f21a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e3a1dcf35d5cadb0cee2f8e3b2eaf38e5cb9978ec4963fef1ab8423cc0ebb3->leave($__internal_78e3a1dcf35d5cadb0cee2f8e3b2eaf38e5cb9978ec4963fef1ab8423cc0ebb3_prof);

        
        $__internal_8a5f5bdac7dcd306eac0c9b2a3e17ceca26f5a51bdf8618dc39f44ca65f21a7d->leave($__internal_8a5f5bdac7dcd306eac0c9b2a3e17ceca26f5a51bdf8618dc39f44ca65f21a7d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5d7ea0785f2647f296328c0169fb11f62d4ecb59c083d7c345be7ddd4bb64e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7ea0785f2647f296328c0169fb11f62d4ecb59c083d7c345be7ddd4bb64e86->enter($__internal_5d7ea0785f2647f296328c0169fb11f62d4ecb59c083d7c345be7ddd4bb64e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1cb8bf02d157c436b18fa87a5ad1cc82b5566174de4adbe32fd252aadcc5157f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb8bf02d157c436b18fa87a5ad1cc82b5566174de4adbe32fd252aadcc5157f->enter($__internal_1cb8bf02d157c436b18fa87a5ad1cc82b5566174de4adbe32fd252aadcc5157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_1cb8bf02d157c436b18fa87a5ad1cc82b5566174de4adbe32fd252aadcc5157f->leave($__internal_1cb8bf02d157c436b18fa87a5ad1cc82b5566174de4adbe32fd252aadcc5157f_prof);

        
        $__internal_5d7ea0785f2647f296328c0169fb11f62d4ecb59c083d7c345be7ddd4bb64e86->leave($__internal_5d7ea0785f2647f296328c0169fb11f62d4ecb59c083d7c345be7ddd4bb64e86_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
