<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ed02cf4d63264c8ee16c72b67ba52166b0ce41965794e03ae1fefaa84e31cf17 extends Twig_Template
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
        $__internal_e124ca3f41221f880b3f4d48667dd1397fb1e383319c6ee39d99e983a8adc83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e124ca3f41221f880b3f4d48667dd1397fb1e383319c6ee39d99e983a8adc83d->enter($__internal_e124ca3f41221f880b3f4d48667dd1397fb1e383319c6ee39d99e983a8adc83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cd87a6beb11e13fac869e77dc5e878051e59ec97f010fe2523a36800ff43daae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd87a6beb11e13fac869e77dc5e878051e59ec97f010fe2523a36800ff43daae->enter($__internal_cd87a6beb11e13fac869e77dc5e878051e59ec97f010fe2523a36800ff43daae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e124ca3f41221f880b3f4d48667dd1397fb1e383319c6ee39d99e983a8adc83d->leave($__internal_e124ca3f41221f880b3f4d48667dd1397fb1e383319c6ee39d99e983a8adc83d_prof);

        
        $__internal_cd87a6beb11e13fac869e77dc5e878051e59ec97f010fe2523a36800ff43daae->leave($__internal_cd87a6beb11e13fac869e77dc5e878051e59ec97f010fe2523a36800ff43daae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
