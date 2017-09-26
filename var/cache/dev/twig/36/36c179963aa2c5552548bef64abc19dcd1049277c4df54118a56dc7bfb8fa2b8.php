<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c044566affe5f83db0708fd87ebed333f2c428ea9b96f9aaba808547d413e31 extends Twig_Template
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
        $__internal_73b3b10bad74c311cfce64f72479a3fd46fd807de53808d936246ca9007c1b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b3b10bad74c311cfce64f72479a3fd46fd807de53808d936246ca9007c1b09->enter($__internal_73b3b10bad74c311cfce64f72479a3fd46fd807de53808d936246ca9007c1b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d8751a881ca97313c8e94352d6476e506dbcba0c5abba594d082d72828333e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8751a881ca97313c8e94352d6476e506dbcba0c5abba594d082d72828333e09->enter($__internal_d8751a881ca97313c8e94352d6476e506dbcba0c5abba594d082d72828333e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_73b3b10bad74c311cfce64f72479a3fd46fd807de53808d936246ca9007c1b09->leave($__internal_73b3b10bad74c311cfce64f72479a3fd46fd807de53808d936246ca9007c1b09_prof);

        
        $__internal_d8751a881ca97313c8e94352d6476e506dbcba0c5abba594d082d72828333e09->leave($__internal_d8751a881ca97313c8e94352d6476e506dbcba0c5abba594d082d72828333e09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
