<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_caf082de2ea23d5253f4f5b6a926912c090c2acfe196e570e464fc588222f4de extends Twig_Template
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
        $__internal_55d0af4a5ad8930c24db89a25bbc93430f869c725cafc8a44d3da1ea4f62a980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d0af4a5ad8930c24db89a25bbc93430f869c725cafc8a44d3da1ea4f62a980->enter($__internal_55d0af4a5ad8930c24db89a25bbc93430f869c725cafc8a44d3da1ea4f62a980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e3ed036b85e918c414504a29276d646d15324ba106ff1b51ab7f1305102493ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ed036b85e918c414504a29276d646d15324ba106ff1b51ab7f1305102493ad->enter($__internal_e3ed036b85e918c414504a29276d646d15324ba106ff1b51ab7f1305102493ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_55d0af4a5ad8930c24db89a25bbc93430f869c725cafc8a44d3da1ea4f62a980->leave($__internal_55d0af4a5ad8930c24db89a25bbc93430f869c725cafc8a44d3da1ea4f62a980_prof);

        
        $__internal_e3ed036b85e918c414504a29276d646d15324ba106ff1b51ab7f1305102493ad->leave($__internal_e3ed036b85e918c414504a29276d646d15324ba106ff1b51ab7f1305102493ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
