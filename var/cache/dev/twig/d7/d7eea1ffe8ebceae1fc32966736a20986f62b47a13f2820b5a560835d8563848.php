<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d54ad08cea6eb0c5c44bd16c5a3f16f339be444bb8b5d90d21f8686c3b6f7cf0 extends Twig_Template
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
        $__internal_092fb170a4a694c5bf632b665480d3c1d3bc445d848acd97528aa1cf1d969864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092fb170a4a694c5bf632b665480d3c1d3bc445d848acd97528aa1cf1d969864->enter($__internal_092fb170a4a694c5bf632b665480d3c1d3bc445d848acd97528aa1cf1d969864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0f237c329ba68b53085338cee9b32de8f48259645e9932ecbd26613fc8048b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f237c329ba68b53085338cee9b32de8f48259645e9932ecbd26613fc8048b27->enter($__internal_0f237c329ba68b53085338cee9b32de8f48259645e9932ecbd26613fc8048b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_092fb170a4a694c5bf632b665480d3c1d3bc445d848acd97528aa1cf1d969864->leave($__internal_092fb170a4a694c5bf632b665480d3c1d3bc445d848acd97528aa1cf1d969864_prof);

        
        $__internal_0f237c329ba68b53085338cee9b32de8f48259645e9932ecbd26613fc8048b27->leave($__internal_0f237c329ba68b53085338cee9b32de8f48259645e9932ecbd26613fc8048b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
